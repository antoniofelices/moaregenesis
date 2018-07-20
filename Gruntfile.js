/*
 *
 * Gruntfile Moare Genesis theme
 *
 * @package moaregenesis
 * @author  Antonio
 * @since 	1.0.0
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 1.0.1
 *
 */

'use strict';
module.exports = function(grunt) {

  require('load-grunt-tasks')(grunt);

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    // Sass
    sass: {
      dev:{
        options: {
          sourceMap: true,
          sourceMapEmbed: false,
          sourceMapContents: true
        },
        files: [{
          expand: true,
          cwd: 'assets/scss',
          src: ['*.{scss,sass}'],
          dest: 'assets/stylesheets',
          ext: '.css'
        }]
      }
    },

    // Watch
    watch: {
      css: {
        files: ['assets/scss/*.scss','assets/scss/plugins/*.scss','assets/scss/lib/genesis/*.scss'],
        tasks: ['sass:dev']
      }
    },

    // Uglify
    uglify: {
      options: {
        preserveComments: false,
      },
      all: {
        files: {
          'assets/js/main.min.js': ['assets/js/lib/responsive-menus.js', 'assets/js/main.js']
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
