# docker-vagrant-nginx-phpfpm

This setup uses Vagrant as an alternative to boot2docker to provide a host for the docker containers to start from.

### Prerequisites
- Vagrant (https://www.vagrantup.com/)

### Folder structure
- app/ (mounted into the web directory of the container. Here should be your project source code.)
- docker/ (Dockerfile to build the image, customized nginx.conf and the supervisord.conf to tell supervisor which processes to run)
- host/ (Vagrantfile to spin up your Linux host ~ boot2docker alternative)
- Vagrantfile (Docker provider, builds the image(s) from Dockerfile(s) and runs the Container(s))

### Spin up Vagrant Host

```sh
$ cd host
$ vagrant up
```

### Spin up Container(s)
```sh
$ cd ..
$ vagrant up --no-parallel
```

### Development

The postgreSQL container is linked to the nginx+php container. The access data for the postgreSQL database is in the environmental variables within the nginx container. Those variables can also be accessed via PHP.
