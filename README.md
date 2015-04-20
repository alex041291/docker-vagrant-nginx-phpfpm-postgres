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
$ vagrant up
```

### Development

That's it, the container is up and running and is bound to the IP Adress 10.10.10.10 and Port 80.
Create a new entry in your hosts file to access it via www.myexample.dev or so to make your life easier. :-)
