'use strict';

let babel = require('rollup-plugin-babel'),
    js_libs = [
        'node_modules/jquery/dist/jquery.js',
        'node_modules/js-cookie/src/js.cookie.js',
        'node_modules/bootstrap/dist/bootstrap.js',
        'js/build/temp.js'
    ];

module.exports = (grunt) => {

    require('load-grunt-tasks')(grunt);

    grunt.initConfig({
        jshint: {
            options: {
                esversion: 6
            },
            all: {
                src: [
                    'js/*.js',
                    '!js/build/*.js'
                ]
            }
        },
        rollup: {
            dev: {
                options: {
                    format: 'es',
                    plugins: function() {
                        return [
                            babel({
                                compact: false
                            })
                        ]
                    }
                },
                files: [{
                    src: 'js/app.js',
                    dest: 'js/build/temp.js'
                }]
            }
        },
        concat: {
            all: {
                src: js_libs,
                dest: 'js/build/app.js'
            }
        },
        sass: {
            dev: {
                options: {
                    outputStyle: 'nested',
                    sourceMap: false,
                    includePaths: [
                        'node_modules/bootstrap/scss',
                    ]
                },
                files: {
                    'css/main.css': 'sass/main.sass'
                }
            },
            prod: {
                options: {
                    outputStyle: 'compressed',
                    sourceMap: true,
                    includePaths: [
                        'node_modules/bootstrap/scss',
                    ]
                },
                files: {
                    'css/main.css': 'sass/main.sass'
                }
            }
        },
        watch: {
            js: {
                tasks: ['dev_js'],
                files: [
                    'js/*.js',
                    'js/**/*.js',
                    '!js/build/*.js'
                ]
            },
            sass: {
                tasks: ['dev_sass'],
                files: [
                    'sass/*.sass'
                ]
            }
        }
    });

    grunt.registerTask('dev_js', 'Run js dev tasks.', [
        'jshint:all', 'rollup:dev', 'concat:all'
    ]);

    grunt.registerTask('dev_sass', 'Run sass dev tasks.', [
        'sass:dev'
    ]);

    grunt.registerTask('dev', 'Run dev tasks.', [
        'jshint:all', 'rollup:dev', 'concat:all', 'sass:dev'
    ]);

    grunt.registerTask('code', 'Builds as dev then watches for changes', [
        'dev', 'watch'
    ]);
};