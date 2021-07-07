<?php
    # Abstract classes can't be instantiated, only usable thru other classes
    # It's sort of a rule to mantain a line sort of
    abstract class Manager {
        # This determine that every children class must have a fn called showProject;
        abstract protected function showProject($project);
    }

    class Employee extends Manager {
        public function showProject($project = "Apple")
        {
            return "I am working on " . $project;
        }

        public function startProject($project)
        {
            return $this->showProject($project);
        }
    }

    $employee = new Employee();
    echo $employee->showProject();
?>