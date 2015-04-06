<?php

Class AuthorForm extends BaseForm
{

    protected function constructor()//инициализация параметров и полей формы
    {
        ThemeComutator::setupTheme("SCHEMA");
        $my_fields["login"] = new Login("Введите ваш логин!", "login");
        $my_fields["password"] = new Password("Введите ваш пароль!", "password");
        $my_fields["submit"] = new Button("Авторизоваться", "Button", "Войти");
        $this->my_content["handle"] = "Авторирзация";
        $this->my_content["method"] = "POST";
        $this->my_content["action"] = "login";
        $this->my_content["fields"] = $my_fields;
    }

    protected function currentTest()//внутренняя проверка формы на правильность
    {
        return true;
    }


    protected function submit()
    {
        header('Location: http://webdb.dev/win');
    }

}