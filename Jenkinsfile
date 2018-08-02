pipeline {
  agent any
  options {
    disableConcurrentBuilds()
  }
  triggers {
      pollSCM('* * * * *')
  }
  stages {
    stage('deploy') {
      when {
        branch 'master'
      }
      steps {
        checkout scm
        sh "aws deploy push --application-name thenewgutfix-Application --s3-location s3://thenewgutfix-deploy/app.zip --source ./ --region us-west-1"
        sh "aws deploy create-deployment --application-name thenewgutfix-Application --s3-location bucket=thenewgutfix-deploy,key=app.zip,bundleType=zip --deployment-group-name thenewgutfix-CodeDeployGroup-OV0T8O3GBCO9 --description \"Deployed thenewgutfix-Application from Jenkins job $JOB_NAME build #$BUILD_NUMBER.\" --region us-west-1"
      }
    }
  }
}
