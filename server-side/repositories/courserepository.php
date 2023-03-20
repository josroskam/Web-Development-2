<?php

namespace Repositories;

use PDO;
use PDOException;
use Repositories\Repository;
use Models\Course;
use DateTime;

class CourseRepository extends Repository
{
    public function deserializeCourse(array $courseData): Course
    {
    $id = $courseData['id'];
    $name = $courseData['name'];
    $startDate = DateTime::createFromFormat('Y-m-d', $courseData['start_date']);
    $endDate = DateTime::createFromFormat('Y-m-d', $courseData['end_date']);
    $description = $courseData['description'];
    $capacity = (int) $courseData['capacity'];
    $location = $courseData['location'];

    return new Course($id, $name, $startDate, $endDate, $description, $capacity, $location);
}


    function getAll($offset = NULL, $limit = NULL)
    {
        try {
            $query = "SELECT * FROM course";
            if (isset($limit) && isset($offset)) {
                $query .= " LIMIT :limit OFFSET :offset ";
            }
            $stmt = $this->connection->prepare($query);
            if (isset($limit) && isset($offset)) {
                $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
                $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            }
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $stmt = null;

            if (!empty(isset($result))) {
                return array_map(fn ($course) => $this->deserializeCourse($course), $result);
            }
            return null;
        } catch (PDOException $e) {
            echo $e;
        }
    }

    function getOne($id)
    {
        try {
            $stmt = $this->connection->prepare("SELECT * FROM category WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Models\Category');
            $product = $stmt->fetch();

            return $product;
        } catch (PDOException $e) {
            echo $e;
        }
    }

    function insert($category)
    {
        try {
            $stmt = $this->connection->prepare("INSERT into category (name) VALUES (?)");

            $stmt->execute([$category->name]);

            $category->id = $this->connection->lastInsertId();

            return $category;
        } catch (PDOException $e) {
            echo $e;
        }
    }


    function update($category, $id)
    {
        try {
            $stmt = $this->connection->prepare("UPDATE category SET name = ? WHERE id = ?");

            $stmt->execute([$category->name, $id]);

            return $category;
        } catch (PDOException $e) {
            echo $e;
        }
    }

    function delete($id)
    {
        try {
            $stmt = $this->connection->prepare("DELETE FROM category WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return;
        } catch (PDOException $e) {
            echo $e;
        }
        return true;
    }
}
