from ru.iamlukovkin.email.models import RequestDto


class HtmlContentService:
    __request: RequestDto

    def __init__(self, request: RequestDto) -> None:
        self.__request = request

    def build_admin_message(self) -> str:
        result: str = f"<html><head></head><body><h1>{self.__request.topic}</h1>" + self.__get_html_body()
        result += "<h3>Контактные данные</h3>" + self.__get_html_contacts() + "</body></html>"
        return result

    def build_user_message(self) -> str:
        result: str = "<html><head></head><body><h1>Вами было отправлено обращение</h1>" + \
                      f"<p>Здравствуйте! Вами было отправлено письмо на тему: <br><b>{self.__request.topic}</b></p>"
        result += self.__get_html_body() + "<p>Вы указали следующие контакты: </p>" + self.__get_html_contacts()
        return result

    def __get_html_body(self) -> str:
        return f"<h3>Текст обращения</h3><p>{self.__request.body}</p>"

    def __get_html_contacts(self) -> str:
        result: str = ""
        mail: str = self.__request.email
        phone: str = self.__request.phone_number
        if mail is not None:
            result += f'<p><a href="mailto: {mail}">{mail}</a></p>'
        if phone is not None:
            result += f'<p><a href="tel: {phone}">{phone}</a></p>'
        return result
