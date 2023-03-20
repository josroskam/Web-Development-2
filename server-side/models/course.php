<?php

namespace Models;

use DateTime;

class Course {
    
    public int $id;
    public string $name;
    public DateTime $start_date;
    public DateTime $end_date;
    public string $description;
    public int $capacity;
    public string $location;

    // construct
    public function __construct($id, $name, $start_date, $end_date, $description, $capacity, $location) {
        $this->id = $id;
        $this->name = $name;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->description = $description;
        $this->capacity = $capacity;
        $this->location = $location;
    }

    // jsonserialize
    public function jsonSerialize() {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'start_date' => $this->start_date->format('Y-m-d'),
            'end_date' => $this->end_date->format('Y-m-d'),
            'description' => $this->description,
            'capacity' => $this->capacity,
            'location' => $this->location
        ];
    }
    

    // getters setters
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getStartDate(){
        return $this->start_date;
    }

    public function setStartDate($start_date){
        $this->start_date = $start_date;
    }

    public function getEndDate(){
        return $this->end_date;
    }

    public function setEndDate($end_date){
        $this->end_date = $end_date;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function getCapacity(){
        return $this->capacity;
    }

    public function setCapacity($capacity) {
        return $this->capacity = $capacity;	
    }

    public function getLocation(){
        return $this->location;
    }

    public function setLocation($location){
        $this->location = $location;
    }
}