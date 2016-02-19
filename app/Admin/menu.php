<?php

Admin::menu()->url('/')->label('Start page')->icon('fa-dashboard');
Admin::menu('App\User')->label('Users')->icon('fa-user');
Admin::menu('App\Link')->label('Links')->icon('fa-link');