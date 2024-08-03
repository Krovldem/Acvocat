class HtmlMailBuilder:
    __title: str
    __body: str
    __email: str
    __phone_number: str

    def title(self, title: str) -> 'HtmlMailBuilder':
        self.__title = title
        return self

    def body(self, content: str) -> 'HtmlMailBuilder':
        self.__body = content
        return self

    def email(self, email: str) -> 'HtmlMailBuilder':
        self.__email = email
        return self

    def phone_number(self, phone_number: str) -> 'HtmlMailBuilder':
        self.__phone_number = phone_number
        return self

    def build(self) -> str:
        result = """<html>
                        <head></head>
                        <body>
                            <h1>Тема: <b>{title}</b></h1>
                            <h3>Содержание</h3>
                            <p>{body}</p>
                            <h3>Контактные данные</h3>
                                """.format(title=self.__title, body=self.__body)
        if self.__phone_number is not None:
            result += '<p>Tel: <a href="tel:{phone_number}">{phone_number}</a></p>'\
                .format(phone_number=self.__phone_number)
        if self.__email is not None:
            result += '<p>Mail: <a href="mailto:{mail}">{mail}</a></p>'.format(mail=self.__email)
        result += """   </body>
                    <html"""
        return result
