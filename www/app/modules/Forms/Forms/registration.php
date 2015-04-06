<?php

Class RegForm extends BaseForm
{

    protected function constructor()//инициализация параметров и полей формы
    {
        ThemeComutator::setupTheme("Kube");
        $my_fields["Family"] = new Name("Фамилия", "Family");
        $my_fields["Name"] = new Name("Имя", "Name");
        $my_fields["Patronimic"] = new Name("Отчество", "Patronimic");
        $my_fields["login"] = new Login("Логин", "login");
        $my_fields["password"] = new Password("Пароль", "password");
        $my_fields["password_rep"] = new Password("Повторите пароль!", "password_rep");
        $my_fields["submit"] = new Button("Зарегестрироваться", "Button", "ОК");
        $this->my_content["handle"] = "Регестрация";
        $this->my_content["method"] = "POST";
        $this->my_content["action"] = "reg";
        $this->my_content["fields"] = $my_fields;
    }

    protected function currentTest()//внутренняя проверка формы на правильность
    {
        $my_fields = $this->my_content["fields"];
        if($my_fields["password"]->getValue() !==  $my_fields["password_rep"]->getValue())
        {
            $my_fields["password"]->setError();
            $my_fields["password_rep"]->setError();
            return false;
        }
        return true;
    }




    protected function submit()
    {
        header('Location: http://webdb.dev/win');
    }

}