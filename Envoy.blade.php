@servers(['web' => ['gff@192.155.88.91']])

@task('ll', ['on' => 'web'])
  cd /var/www/serundeputy
  ls -alh
@endtask

@task('deploy', ['on' => 'web'])
  cd /var/www/serundeputy/www
  @if ($branch)
    git pull origin {{ $branch }}
  @endif
  composer install
  drush updb -y
  drush bcim -y
  drush cc all
@endtask
