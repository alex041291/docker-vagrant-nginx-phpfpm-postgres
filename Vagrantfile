Vagrant.require_version ">= 1.6.0"
VAGRANTFILE_API_VERSION = "2"
ENV['VAGRANT_DEFAULT_PROVIDER'] = 'docker'

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  # mounted diesen (.) Ordner nach /vagrant im Container
  # sprich man müsste hier einen /www Ornder nach /var/bla/bla mounten, wo halt nginx web inhalte ausliefert
  config.vm.synced_folder "./app", "/usr/share/nginx/html/unterordner", disabled: false

  config.vm.define "postgres" do |postgres|
    postgres.vm.provider 'docker' do |docker|
      docker.vagrant_vagrantfile = "host/Vagrantfile"
      docker.image  = 'postgres'
      docker.name   = 'my-postgres'
      docker.ports  = ['5432:5432']
    end
  end

  config.vm.define "nginxPhp" do |nginxPhp|
    nginxPhp.vm.provider "docker" do |docker|
      docker.vagrant_vagrantfile = "host/Vagrantfile"
      docker.build_dir = "./docker"
      docker.name = 'my-nginx'
      docker.ports = ['80:80']

      docker.link('my-postgres:postgres')
    end
  end

end
