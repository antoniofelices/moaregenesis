/*
 *
 * Gruntfile Moare Genesis theme
 *
 * @package moaregenesis
 * @author  Antonio
 * @since 	1.0.0
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 2.0.1
 *
 */

'use strict';
module.exports = function(grunt) {

	const sass = require('node-sass');
	require('load-grunt-tasks')(grunt);

	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		// Sass
		sass: {
			options: {
				implementation: sass,
				sourceMap: true,
				sourceComments: true
				// sourceMapContents: true
			},
			dist: {
				files: {
					'assets/stylesheets/main.css': 'assets/scss/main.scss',
					'assets/stylesheets/editor-style-block.css': 'assets/scss/editor-style-block.scss'
				}
			}
		},

		// Watch
		watch: {
			css: {
				files: ['assets/scss/*.scss','assets/scss/*/*.scss'],
				tasks: ['sass']
			}
		},

		// Uglify
		uglify: {
			options: {
				preserveComments: false,
			},
			all: {
				files: {
					'assets/js/main.min.js': ['assets/js/main.js'],
				}
			}
		},

		// CSSmin
		cssmin: {
			options: {
				sourceMap: true
			},
			target: {
				files: {
					'assets/stylesheets/main.min.css': ['assets/stylesheets/main.css']
				}
			}
		}

	});

	// Load tasks
	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-cssmin');

	// Register tasks
	grunt.registerTask('default', ['watch']);
	grunt.registerTask('build', ['cssmin','uglify']);

};
