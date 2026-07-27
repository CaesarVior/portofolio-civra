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
                sh 'docker compose down -v'
                sh 'docker compose up -d --build'
            }
        }

        stage('Laravel Post-Deployment') {
            steps {
                echo 'Waiting for database to be fully ready...'
                sh 'until docker exec main-mysql-container mysqladmin ping --silent; do echo "Waiting for MySQL..."; sleep 2; done'
                sh 'docker exec portofolio-civra-app-container php artisan migrate'
                sh 'docker exec portofolio-civra-app-container php artisan optimize:clear'
            }
        }
    }
}