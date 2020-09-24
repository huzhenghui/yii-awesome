_: just-choose

just-choose:
    #!/usr/bin/env sh
    choose_recipe=$(just --summary | tr ' ' '\n' | /usr/local/opt/choose-gui/bin/choose)
    echo "Choose Recipe: ${choose_recipe}"
    just "${choose_recipe}"

just-list:
    just --list

code:
    code .

# Basic : 1 : Create Project by Composer
create-project-basic:
    composer create-project --prefer-dist yiisoft/yii2-app-basic ./projects/basic

# Basic : 2 : Serve
serve-basic:
    cd ./projects/basic && php yii serve

# Basic : 3 : Open
open-basic:
    open 'http://localhost:8080/'

# Basic : 4 : Open Code by PhpStorm
phpstorm-basic:
    open -a "PhpStorm" ./projects/basic

# Basic : Yii Help
help-basic-yii:
    cd ./projects/basic && php yii help

# Basic : Yii Help Serve
help-basiic-yii-serve:
    cd ./projects/basic && php yii help serve

# Basic : Clean
clean-basic:
    trash ./projects/basic
