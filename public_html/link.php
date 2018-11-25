$targetFolder = '/laravel/storage/app/public';

$linkFolder = '/public_html/storage';

symlink($targetFolder, $linkFolder);

echo 'Done!'