<?php

namespace App\Interface;

interface IController
{
    public function index();

    public function show($id);

    public function add();

    public function store();

    public function edit($id);

    public function update();

    public function delete($id);
}