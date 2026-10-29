<?php
$departments = [
    ['name' => 'Pediatric Care', 'description' => 'Our pediatric care focuses on the health and well-being of infants, children, and adolescents.', 'icon' => 'icon-service-item-1.svg'],
    ['name' => 'Family Medicine', 'description' => 'Comprehensive primary care for patients of all ages, from newborns to seniors.', 'icon' => 'icon-service-item-2.svg'],
    ['name' => 'Preventive Healthcare', 'description' => 'Proactive screenings, vaccinations, and wellness plans to keep you healthy.', 'icon' => 'icon-service-item-3.svg'],
    ['name' => 'Cardiology', 'description' => 'Personalized heart care through evaluation, prevention, and advanced treatment.', 'icon' => 'icon-service-item-4.svg'],
    ['name' => 'Gynecology', 'description' => 'Compassionate women\'s health care from routine checkups to specialized treatment.', 'icon' => 'icon-service-item-5.svg'],
    ['name' => 'Diagnostic Imaging', 'description' => 'Advanced imaging technology for accurate diagnosis and effective treatment planning.', 'icon' => 'icon-service-item-6.svg'],
    ['name' => 'Laboratory Testing', 'description' => 'Accurate and timely lab tests to support diagnosis and monitor your health.', 'icon' => 'icon-service-item-7.svg'],
    ['name' => 'Mental Health Support', 'description' => 'Compassionate counseling and support for emotional well-being and mental wellness.', 'icon' => 'icon-service-item-8.svg'],
];
return [
    'home_rating' => '4.6',
    'home_reviews' => '1500',
    'trusted_patients' => '10,000',
    'experience_years' => '8',
    'emergency_hours' => '24',
    'experienced_doctors' => '10',
    'medical_departments' => count($departments),
    'medical_departments_list' => $departments
];
