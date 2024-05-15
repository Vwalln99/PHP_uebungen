<?php

require_once(dirname(path: __DIR__) . "/TeamLeader.php");
require_once(dirname(path: __DIR__) . "/Developer.php");
require_once(dirname(path: __DIR__) . "/Project.php");

$claudia = new Teamleader(name: 'Claudia Leader', email: 'claudia.leader@company.at');
$henrik_dev = new Developer(name: 'Henrik Dev', email: 'henrik.dev@company.at');
$henrik_dev->addSkill(skill: 'PHP');
$henrik_dev->addSkill(skill: 'Backend');
$amilia_dev = new Developer(name: 'Amilia Dev', email: 'amilia.dev@company.at');
$amilia_dev->addSkill(skill: 'JavaScript');
$amilia_dev->addSkill(skill: 'Frontend');

for ($i = 1; $i <= 5; $i++) {
    $claudia->addProject(new Project(name: "Project $i"));
}

$claudia->setDeveloper($henrik_dev, $claudia->getProjects()[0]->getID());
$claudia->setDeveloper($amilia_dev, $claudia->getProjects()[0]->getID());
$claudia->setDeveloper($henrik_dev, $claudia->getProjects()[3]->getID());
$claudia->setDeveloper($amilia_dev, $claudia->getProjects()[4]->getID());

$henrik_dev->progress($henrik_dev->getAssignedProjects($claudia->getProjects())[0], progress: 50);
$amilia_dev->progress($amilia_dev->getAssignedProjects($claudia->getProjects())[1], progress: 76);
