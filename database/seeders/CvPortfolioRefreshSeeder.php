<?php

namespace Database\Seeders;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Expert;
use App\Models\Portfolio;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\ProjectDetail;
use App\Models\ProjectImage;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Training;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CvPortfolioRefreshSeeder extends Seeder
{
    public function run(): void
    {
        DB::transaction(function (): void {
            $portfolio = Portfolio::firstOrNew(['id' => Portfolio::query()->value('id') ?? 1]);

            $portfolio->fill([
                'name' => 'Sohail Afzal',
                'job_title' => 'Senior Full Stack Developer & IT Coordinator',
                'date_of_birth' => '1976-06-08',
                'phone' => '+92 345 4145910',
                'city' => 'Lahore, Pakistan',
                'email' => 'sohail.afzal@barqaab.com',
                'web' => 'https://sohail.barqaab.pk/',
                'degree' => 'B.S Information Technology',
                'freelance_status' => 'Available for Laravel, API, MIS, and mobile-integrated systems',
                'introduction' => '<p>Senior IT Coordinator and Full Stack Developer with 20+ years at BARQAAB Consulting Services and hands-on delivery experience across enterprise web, mobile, HR, asset, project, leave, and field-survey management systems.</p><p>I specialize in Laravel, MySQL, RESTful APIs, role-based access control, reporting dashboards, audit trails, backup workflows, and mobile/web integrations using Flutter, Android Studio, and Nuxt.js. My work focuses on secure, maintainable systems that automate business processes, improve data accuracy, and support management decision-making.</p>',
                'meta_title' => 'Sohail Afzal | Senior Full Stack Laravel Developer',
                'meta_description' => 'Senior Full Stack Developer and IT Coordinator experienced in Laravel, MySQL, REST APIs, RBAC, dashboards, Flutter, Android, Nuxt.js, HRMS, AMS, PMS, MIS, LMS, and field survey systems.',
                'meta_keywords' => 'Sohail Afzal, Laravel Developer, Full Stack Developer, IT Coordinator, MySQL, REST API, Flutter, Android, Nuxt.js, HRMS, AMS, PMS, MIS, LMS, BARQAAB',
            ]);

            if (! $portfolio->picture) {
                $portfolio->picture = 'picture/01KW1JRQKQV9RKWM7W0P1H0YX8.jpg';
            }

            if (! $portfolio->banner) {
                $portfolio->banner = 'banner/01KW1JRQMB62PHKYNBAADAP9B9.jpg';
            }

            $portfolio->save();

            $this->replaceSimpleContent($portfolio->id);
            $this->replaceProjects($portfolio->id);
        });
    }

    private function replaceSimpleContent(int $portfolioId): void
    {
        Expert::query()->delete();
        Skill::query()->delete();
        Education::query()->delete();
        Training::query()->delete();
        Experience::query()->delete();
        Service::query()->delete();

        foreach (
            [
                'Laravel Developer',
                'Senior Full Stack Developer',
                'REST API Developer',
                'Flutter / Android Systems Developer',
                'Database & Reporting Specialist',
            ] as $index => $name
        ) {
            Expert::create([
                'portfolio_id' => $portfolioId,
                'name' => $name,
                'placement' => $index + 1,
                'status' => true,
            ]);
        }

        foreach (
            [
                ['Laravel / PHP', 95],
                ['MySQL Database Design', 92],
                ['RESTful APIs / Laravel Sanctum', 90],
                ['HTML, CSS, JavaScript, Blade', 90],
                ['Role-Based Access Control', 88],
                ['Reporting Dashboards & Analytics', 86],
                ['Flutter / Android Applications', 82],
                ['Nuxt.js Web Applications', 78],
                ['System Security & Data Validation', 86],
                ['Backup, Deployment & User Support', 88],
            ] as $index => [$name, $level]
        ) {
            Skill::create([
                'portfolio_id' => $portfolioId,
                'skill_name' => $name,
                'level' => $level,
                'remarks' => 'Based on CV project delivery experience.',
                'placement' => $index + 1,
                'status' => true,
            ]);
        }

        foreach (
            [
                ['B.S Information Technology', '2018', 'Virtual University of Pakistan', '<p>CGPA: 3.80. Focused on information systems, software development, databases, and IT operations.</p>'],
                ['B.Sc. Computer Science', '2016', 'Virtual University of Pakistan', '<p>CGPA: 3.89. Built a strong foundation in programming, database systems, computer networks, and web technologies.</p>'],
            ] as $index => [$degree, $duration, $institution, $intro]
        ) {
            Education::create([
                'portfolio_id' => $portfolioId,
                'degree_name' => $degree,
                'duration' => $duration,
                'institution' => $institution,
                'education_intro' => $intro,
                'placement' => $index + 1,
                'status' => true,
            ]);
        }

        foreach (
            [
                ['Cloud Native Developer', 'One year', 'The Presidential Institute of Artificial Intelligence & Computing', '<p>Covered cloud-native application concepts, modern development workflows, and scalable application delivery.</p>'],
                ['Network Defense & Cyber Operations', 'One year', 'National Cyber Training Program', '<p>Focused on network defense, cyber operations, risk awareness, and secure systems practices.</p>'],
                ['Network Essentials', 'Four months', 'Cisco Networking Academy', '<p>Covered networking fundamentals, connectivity, network services, and operational troubleshooting.</p>'],
                ['Laravel Framework', 'Eight weeks', 'Virtual University of Pakistan', '<p>Practical Laravel training covering MVC architecture, routing, controllers, Blade, Eloquent ORM, and database-backed web applications.</p>'],
            ] as $index => [$name, $duration, $institution, $intro]
        ) {
            Training::create([
                'portfolio_id' => $portfolioId,
                'name' => $name,
                'duration' => $duration,
                'institution' => $institution,
                'introduction' => $intro,
                'placement' => $index + 1,
                'status' => true,
            ]);
        }

        foreach (
            [
                [
                    'BARQAAB Consulting Services (Pvt.) Ltd.',
                    'Senior IT Coordinator / Senior Full Stack Developer',
                    '2001 - Present',
                    '<ul><li>Design and develop Laravel-based enterprise systems for HR, assets, projects, leave workflows, MIS reporting, and field survey operations.</li><li>Build MySQL schemas, migrations, indexes, REST APIs, role-based access control, dashboards, audit trails, notifications, and backup routines.</li><li>Integrate web, API, Android, Flutter, and Nuxt.js applications for real-time data collection, synchronization, validation, and reporting.</li><li>Coordinate requirements, testing, deployment, user training, maintenance, performance tuning, and post-implementation support with business teams.</li></ul>',
                ],
                [
                    'PTCL',
                    'HR & Admin Executive',
                    '1995 - 2001',
                    '<ul><li>Managed HR and administration workflows, staff documentation, coordination, and office support functions.</li><li>Built early professional experience in employee records, operations, communication, and organizational process control.</li></ul>',
                ],
            ] as $index => [$firm, $position, $duration, $responsibility]
        ) {
            Experience::create([
                'portfolio_id' => $portfolioId,
                'firm' => $firm,
                'position' => $position,
                'duration' => $duration,
                'responsibility' => $responsibility,
                'placement' => $index + 1,
                'status' => true,
            ]);
        }

        foreach (
            [
                ['Enterprise Laravel Applications', 'bi bi-window-stack', 'End-to-end Laravel systems for HR, assets, project tracking, leave workflows, MIS reporting, dashboards, audit trails, and secure administration panels.'],
                ['Database Design & Optimization', 'bi bi-database-check', 'Relational MySQL schema design, indexing, query optimization, migrations, seeders, large dataset handling, backups, and recovery planning.'],
                ['REST API Development', 'bi bi-diagram-3', 'Secure Laravel API services with Sanctum authentication, validation, role-based permissions, synchronization endpoints, and web/mobile integration.'],
                ['Mobile & Field Data Systems', 'bi bi-phone', 'Flutter and Android field applications with offline data collection, GPS capture, image uploads, synchronization, and operational validation.'],
                ['Dashboards & Reporting', 'bi bi-bar-chart-line', 'Management dashboards, analytical reports, progress tracking, compliance summaries, downloadable reports, and decision-support views.'],
                ['Deployment, Training & Support', 'bi bi-tools', 'Application deployment, debugging, performance tuning, user training, maintenance, and continuous improvement for business-critical systems.'],
            ] as $index => [$name, $icon, $intro]
        ) {
            Service::create([
                'portfolio_id' => $portfolioId,
                'name' => $name,
                'icon' => $icon,
                'intro' => $intro,
                'placement' => $index + 1,
                'status' => true,
            ]);
        }
    }

    private function replaceProjects(int $portfolioId): void
    {
        $images = ProjectImage::query()->pluck('image')->filter()->values()->all();
        $images = array_values(array_unique(array_merge($images, $this->storageProjectImages())));

        ProjectImage::query()->delete();
        ProjectDetail::query()->delete();
        Project::query()->delete();
        ProjectCategory::query()->delete();

        $category = ProjectCategory::create(['name' => 'Enterprise Systems']);

        foreach ($this->projects() as $index => $projectData) {
            $project = Project::create([
                'portfolio_id' => $portfolioId,
                'project_category_id' => $category->id,
                'short_name' => $projectData['name'],
                'project_intro' => $projectData['summary'],
                'placement' => $index + 1,
                'status' => true,
            ]);

            $detail = ProjectDetail::create([
                'project_id' => $project->id,
                'client' => 'BARQAAB Consulting Services (Pvt.) Ltd.',
                'project_date' => $projectData['date'],
                'project_url' => null,
                'heading' => $projectData['heading'],
                'introduction' => $projectData['details'],
            ]);

            if (! empty($images)) {
                ProjectImage::create([
                    'project_detail_id' => $detail->id,
                    'image' => $images[$index % count($images)],
                ]);
            }
        }
    }

    private function storageProjectImages(): array
    {
        $directory = storage_path('app/public/project');

        if (! File::isDirectory($directory)) {
            return [];
        }

        return collect(File::files($directory))
            ->map(fn($file) => 'project/' . $file->getFilename())
            ->all();
    }

    private function projects(): array
    {
        return [
            [
                'name' => 'Human Resource Management System',
                'date' => '2018-12-31',
                'heading' => 'Web-based HRMS for employee lifecycle automation',
                'summary' => 'Laravel HRMS for employee profiles, transfers, promotions, documents, expiry tracking, alerts, dashboards, and audit trails.',
                'details' => '<p>A comprehensive Laravel-based HRMS built to centralize employee records and automate HR operations.</p><ul><li>Managed personal, official, education, experience, posting, promotion, and document records.</li><li>Implemented contract/CNIC expiry tracking, email alerts, HR dashboards, and audit logs.</li><li>Designed MySQL schemas, migrations, RBAC, validation, backups, and performance optimizations.</li></ul>',
            ],
            [
                'name' => 'Asset Management System',
                'date' => '2019-12-31',
                'heading' => 'QR-based asset tracking and inventory control platform',
                'summary' => 'Laravel AMS for asset registration, QR tracking, allocation, transfers, maintenance, inventory dashboards, and reporting.',
                'details' => '<p>A web-based asset platform for tracking organizational inventory, location, assignment, condition, and lifecycle history.</p><ul><li>Built QR code generation/scanning, asset allocation, transfer, maintenance, and disposal workflows.</li><li>Implemented real-time status tracking, audit logs, dashboards, role permissions, and notifications.</li><li>Optimized MySQL queries and indexing for reliable large inventory handling.</li></ul>',
            ],
            [
                'name' => 'Project Management System',
                'date' => '2020-12-31',
                'heading' => 'Project planning, progress, budget, and risk management system',
                'summary' => 'Laravel PMS for task scheduling, milestones, resource allocation, budget monitoring, risk tracking, and dashboards.',
                'details' => '<p>A project control system that gives management real-time visibility into progress, budget utilization, bottlenecks, and performance.</p><ul><li>Developed task management, project tracking, resource allocation, budget monitoring, and reporting modules.</li><li>Implemented RBAC, Laravel Sanctum security, audit logs, clean backend workflows, and optimized database structures.</li><li>Supported deployment, user training, testing, and post-launch refinements.</li></ul>',
            ],
            [
                'name' => 'Management Information System',
                'date' => '2021-12-31',
                'heading' => 'Web and Android MIS with Laravel APIs and Nuxt.js frontend',
                'summary' => 'Integrated MIS using Laravel REST APIs, Nuxt.js, Android Studio, MySQL, dashboards, reports, and secure synchronization.',
                'details' => '<p>A centralized MIS combining Laravel backend services, a Nuxt.js web application, and a native Android application.</p><ul><li>Designed API architecture for secure data exchange between backend, web, and mobile platforms.</li><li>Integrated legacy data, dashboards, analytics, downloadable reports, and role-based access control.</li><li>Improved performance through query optimization, caching, validation, and scheduled backups.</li></ul>',
            ],
            [
                'name' => 'Leave Management System',
                'date' => '2022-12-31',
                'heading' => 'Online leave requests, approvals, balances, and HR reporting',
                'summary' => 'Laravel LMS for leave policies, request workflows, approval hierarchy, notifications, balances, and audit-ready reports.',
                'details' => '<p>A leave automation platform that replaced manual paperwork with transparent digital workflows.</p><ul><li>Implemented leave types, accrual rules, approval hierarchies, request history, and leave balance management.</li><li>Built employee, manager, and administrator roles with validation, notifications, reporting dashboards, and audit trails.</li><li>Delivered testing, debugging, deployment, maintenance, and user support.</li></ul>',
            ],
            [
                'name' => 'Earthing Inspection Mobile System',
                'date' => '2025-12-31',
                'heading' => 'Flutter and Laravel survey system for 200,000+ pole records',
                'summary' => 'Android/web system for HT/LT pole earthing surveys with offline collection, GPS, images, validation, dashboards, and reports.',
                'details' => '<p>An integrated Flutter and Laravel system for large-scale HT/LT pole earthing inspection and reporting for power distribution operations.</p><ul><li>Built offline mobile data collection, synchronization, GPS capture, image evidence, and preloaded hierarchy dropdowns.</li><li>Developed Laravel APIs, MySQL structures, validation logic, RBAC, audit logs, dashboards, and summary reports.</li><li>Optimized for 200,000+ records, field reliability, backup planning, training, and continuous support.</li></ul>',
            ],
        ];
    }
}
