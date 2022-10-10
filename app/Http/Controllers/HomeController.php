<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Project;
use App\Models\Review;
use App\Models\Service;
use App\Models\Statistic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $nb_clients = $this->getNbClients();
        $years_experience = $this->getYearsExperience();
        $nb_projects_finished = $this->getNbProjectsFinished();
        $nb_members = $this->getNbMembers();
        $services = $this->getServices();
        $projects = $this->getProjects();
        $members = $this->getMembers();
        $reviews = $this->getReviews();
        return view('home', compact('nb_clients', 'years_experience', 'nb_projects_finished', 'nb_members', 'services', 'projects', 'members', 'reviews'));
    }
    private function getNbClients()
    {
        $nb_clients = Statistic::where('name', 'clients')->select('name')->first();
        return $nb_clients;
    }
    private function getYearsExperience()
    {
        $years_experience = Statistic::where('name', 'years experience')->select('name')->first();
        return $years_experience;
    }
    private function getNbProjectsFinished()
    {
        $nb_projects_finished = Statistic::where('name', 'projects finished')->select('name')->first();
        return $nb_projects_finished;
    }
    private function getNbMembers()
    {
        $nb_members = Member::count();
        return $nb_members;
    }
    private function getServices()
    {
        $services = Service::all();
        return $services;
    }
    private function getProjects()
    {
        $projects = Project::all();
        return $projects;
    }
    private function getMembers()
    {
        $members = Member::paginate(15);
        return $members;
    }
    private function getReviews()
    {
        $reviews = Review::all();
        return $reviews;
    }
}
