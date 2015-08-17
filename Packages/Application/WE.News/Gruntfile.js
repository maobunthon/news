module.exports = function(grunt) {
    grunt.initConfig({
        less: {
            compile: {
                files: {
                    'Resources/Public/css/custom.css': 'Resources/Private/Stylesheet/custom.less'
                }
            }
        },
        watch: {
            less:{
                files: ['Resources/Public/css/custom.css'],
                tasks: ['less']
            }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('default', [
        'less','watch'
    ]);
};
