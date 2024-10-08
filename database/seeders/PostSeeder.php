<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::query()->truncate();

        Post::query()->create([
            'title' => 'Laravel',
            'content' => 'This is a Laravel post. Laravel is the best PHP framework.',
        ]);

        Post::query()->create([
            'title' => 'React',
            'content' => 'This is a React post. React is a JavaScript library for building user interfaces.',
        ]);

        Post::query()->create([
            'title' => 'Vue',
            'content' => 'This is a Vue post. Vue is a progressive JavaScript framework.',
        ]);

        Post::query()->create([
            'title' => 'Angular',
            'content' => 'This is an Angular post. Angular is a platform and framework for building single-page client applications using HTML and TypeScript.',
        ]);

        Post::query()->create([
            'title' => 'Svelte',
            'content' => 'This is a Svelte post. Svelte is a new way to build web applications.',
        ]);

        Post::query()->create([
            'title' => 'Ember',
            'content' => 'This is an Ember post. Ember.js is a productive, battle-tested JavaScript framework for building ambitious web applications.',
        ]);

        Post::query()->create([
            'title' => 'Backbone',
            'content' => 'This is a Backbone post. Backbone.js gives structure to web applications by providing models with key-value binding and custom events.',
        ]);

        Post::query()->create([
            'title' => 'Meteor',
            'content' => 'This is a Meteor post. Meteor is a full-stack JavaScript platform for developing modern web and mobile applications.',
        ]);

        Post::query()->create([
            'title' => 'Aurelia',
            'content' => 'This is an Aurelia post. Aurelia is a collection of modern JavaScript modules, which when used together, function as a powerful platform for building browser, desktop and mobile applications.',
        ]);

        Post::query()->create([
            'title' => 'Polymer',
            'content' => 'This is a Polymer post. Polymer is a JavaScript library that helps you create custom reusable HTML elements, and use them to build performant, maintainable apps.',
        ]);

        Post::query()->create([
            'title' => 'Knockout',
            'content' => 'This is a Knockout post. Knockout is a JavaScript library that helps you to create rich, responsive display and editor user interfaces with a clean underlying data model.',
        ]);

        Post::query()->create([
            'title' => 'Mithril',
            'content' => 'This is a Mithril post. Mithril is a modern client-side JavaScript framework for building single-page applications.',
        ]);

        Post::query()->create([
            'title' => 'Riot',
            'content' => 'This is a Riot post. Riot.js is a user interface micro-library.',
        ]);

        Post::query()->create([
            'title' => 'Preact',
            'content' => 'This is a Preact post. Preact is a fast 3kB alternative to React with the same modern API.',
        ]);

        Post::query()->create([
            'title' => 'Inferno',
            'content' => 'This is an Inferno post. Inferno is an insanely fast, 9kb React-like library with the same ES6 API.',
        ]);

        Post::query()->create([
            'title' => 'Elm',
            'content' => 'This is an Elm post. Elm is a delightful language for reliable webapps.',
        ]);
    }
}
