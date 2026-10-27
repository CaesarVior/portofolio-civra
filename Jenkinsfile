pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Build & Deploy') {
            steps {
                echo 'Building and starting containers...'
                sh 'cp .env.staging .env'
            }
        }

        stage('Laravel Post-Deployment') {
            steps {
                sh 'docker compose up -d --remove-orphans'
            }
        }
    }
}