<?php

namespace Models;

class Registation {

    public int $registation_id;
    public Course $course;
    public User $user;

    // construct
    public function __construct($registation_id, $course, $user) {
        $this->registation_id = $registation_id;
        $this->course = $course;
        $this->user = $user;
    }

    // jsonserialize
    public function jsonSerialize() {
        return [
            'registation_id' => $this->registation_id,
            'course' => $this->course,
            'user' => $this->user
        ];
    }

    // getters setters

    public function getRegistationId() {
        return $this->registation_id;
    }

    public function setRegistationId($registation_id) {
        $this->registation_id = $registation_id;
    }

    public function getCourse() {
        return $this->course;
    }

    public function setCourse($course) {
        $this->course = $course;
    }

    public function getUser() {
        return $this->user;
    }

    public function setUser($user) {
        $this->user = $user;
    }
}