@servers(['web' => ['gff@192.155.88.91']])

@task('ll', ['on' => 'web'])
  cd /var/www/serundeputy
  ls -alh
@endtask

@task('deploy', ['on' => 'web'])
  @if ($branch)
    git pull origin {{ $branch }}
  @endif
  cd /var/www/serundeputy
  composer install
  cd /var/www/serundepyty/www
  drush updb -y
  drush bcim -y
  drush cc all
@endtask
