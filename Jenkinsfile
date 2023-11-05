pipeline {
    agent any
    parameters{
       string(name: 'BRANCH_NAME', defaultValue: 'dev', description: 'Git target branch')
       string(name: 'RUNSPACE', defaultValue: 'local', description: 'Current environment')
    }

    environment{
        domain = "${RUNSPACE}"
    }

    stages {
        stage('Intro') {
            steps {
                echo "CrackJokes CI #${BUILD_NUMBER} job start ..."
            }
        }
        stage('Build job details') {
            steps {
                echo 'Current job details ...'
                sh   'echo Environment: $domain'
                echo "${BUILD_TAG}"
            }
        }
        stage('Git checkout') {
            steps {
                sh  'echo Current branch [$BRANCH_NAME]:'
                git branch: '$BRANCH_NAME', credentialsId: 'githhub-account', url: 'https://github.com/MorelSami/CrackJokes.git'
                sh 'ls -lsrt tests'
                sh 'cat README.md'
                echo 'All good!'
            }
        }
    }
    post {
        success {
            echo 'Pipeline job completed successfully.'
        }
        failure {
            echo 'Pipeline job failed. Please check logs for more details.'
        }
    }
}