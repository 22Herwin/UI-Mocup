<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.landing');
Route::view('/login', 'pages.login');

Route::view('/student', 'pages.student');
Route::view('/student/session', 'pages.session');
Route::view('/projects', 'pages.projects');
Route::view('/documents', 'pages.documents');
Route::view('/reports', 'pages.reports');
Route::view('/lecturer', 'pages.lecturer');
Route::view('/admin/tenant', 'pages.tenant');
Route::view('/integrations', 'pages.integrations');
