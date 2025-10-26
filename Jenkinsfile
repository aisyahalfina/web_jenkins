pipeline {
agent any
environment {
    IMAGE_NAME = 'aisyahalfina/pesantren'
    REGISTRY_CREDENTIALS = 'newdockerhub-credentials'
}
stages {
    stage('Checkout') {
    steps { checkout scm }
    }
    stage('Build Docker Image') {
    steps {
        bat "docker build -t %IMAGE_NAME%:%BUILD_NUMBER% ."
    }
    }
    stage('Push Docker Image') {
    steps {
        withCredentials([usernamePassword(credentialsId: REGISTRY_CREDENTIALS,
                                        usernameVariable: 'USER',
                                        passwordVariable: 'PASS')]) {
        bat 'docker login -u %USER% -p %PASS%'
        bat "docker push %IMAGE_NAME%:%BUILD_NUMBER%"
        bat "docker tag %IMAGE_NAME%:%BUILD_NUMBER% %IMAGE_NAME%:latest"
        bat "docker push %IMAGE_NAME%:latest"
        }
    }
    }
}
post {
    always { echo 'Build web by ais selesai di Jenkins!' }
}
}
