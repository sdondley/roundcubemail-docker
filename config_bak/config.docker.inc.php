<?php
  $config['db_dsnw'] = 'sqlite:////var/roundcube/db/sqlite.db?mode=0646';
  $config['db_dsnr'] = '';
  $config['default_host'] = 'email.dondley.com';
  $config['default_port'] = '993';
  $config['smtp_server'] = 'email.dondley.com';
  $config['smtp_port'] = '587';
  $config['temp_dir'] = '/tmp/roundcube-temp';
  $config['skin'] = 'larry';
  $config['plugins'] = array_filter(array_unique(array_merge($config['plugins'], ['archive', 'zipdownload'])));
  
