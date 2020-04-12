# Docker

## Getting Started

### Clone repository to the common place

```bash
git clone https://github.com/VitaliyIlinov/docker_compose.git ~/workspace/docker_compose
```

# Install Docker
https://docs.docker.com/install/linux/docker-ce/ubuntu

### Build application image:

```bash
make build | docker-compose build
```

### Start application

Start project using command as follows:

```bash
make up
```
Now it is ready to use (check http://localhost/ ).

### For more info see
```bash
make help
```
### Config folder include
```bash
VirtualHost for nginx
xdebug
php
entrypoint before container run
```