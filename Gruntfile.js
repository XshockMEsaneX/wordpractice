module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      build: {
        //src: 'src/<%= pkg.name %>.js',
        //dest: 'build/<%= pkg.name %>.min.js'
      }
    },

    sass: {

      compile: {
        files: {
          'assets/css/theme.css' : 'assets/css/scss/theme.scss'
        }
      }

    },

    watch:  {

      sass: {
        files: ['assets/css/*/**/*.scss'],
        tasks: ['sass'],
        options: {
          debounceDelay: 500,
          livereload: true
        }
      },
    }

  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task.
  grunt.registerTask( 'default', ['uglify', 'sass' ] );

  grunt.util.linefeed = '\n';
};