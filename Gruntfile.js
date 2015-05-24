module.exports = function (grunt) {

    grunt.initConfig({
        uncss: {
            dist: {
                files: [
                    { src:[ './*.html'], dest: 'css/tidy.css' }
                ]
            }
        },
        cssmin: {
            dist: {
                files: [
                    { src: 'css/tidy.css', dest: 'css/tidy.css' }
                ]
            }
        }
    });

    // Load the plugins
    grunt.loadNpmTasks('grunt-uncss');
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    // Default tasks.
    grunt.registerTask('default', ['uncss', 'cssmin']);

};
