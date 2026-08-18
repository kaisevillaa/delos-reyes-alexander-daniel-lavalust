<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller {
    private function startSession()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    private function studentData()
    {
        return [
            'student_id' => 'MCC2024-00077',
            'name' => 'Alexander Daniel S. Delos Reyes',
            'course' => 'BSIT',
            'year_level' => '3rd Year',
            'section' => 'F2',
            'email' => 'delosreyes.alexander@minsu.edu.ph',
            'address' => 'Masipit, Calapan City, Oriental Mindoro',
            'contact_number' => '09082573088',
            'skills' => 'Playing Games, Fixing Computer Hardware',
            'hobbies' => 'Listening to Music Nonstop',
            'profile_description' => 'Xander | Information Technology Student

3rd-year BS Information Technology student at Mindoro State University – Calapan City Campus with a strong passion for computer hardware repair and systems troubleshooting. Outside of tech and academics, an avid gamer and music enthusiast.',
            'instagram' => 'kai.sevilla',
            'facebook' => 'Alexander Delos Reyes (Kai)'
        ];
    }

    public function index()
    {
        $this->startSession();
        $_SESSION['student_access_key'] = 'xander-verified-2026';

        $notice = $_SESSION['student_notice'] ?? null;
        unset($_SESSION['student_notice']);

        $this->call->view('student/home', [
            'page_title' => 'Xander Student Hub',
            'student' => $this->studentData(),
            'notice' => $notice
        ]);
    }

    public function profile()
    {
        $this->startSession();

        $this->call->view('student/profile', [
            'page_title' => 'Xander Student Profile Card',
            'student' => $this->studentData()
        ]);
    }
}
?>
