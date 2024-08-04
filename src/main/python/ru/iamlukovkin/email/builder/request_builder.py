from ru.iamlukovkin.email.models import RequestDto
from ru.iamlukovkin.email.exception import WithoutContactsException


class RequestBuilder:
    __topic: str
    __body: str
    __phone_number: str
    __email: str

    def topic(self, topic: str) -> 'RequestBuilder':
        self.__topic = topic
        return self

    def body(self, body: str) -> 'RequestBuilder':
        self.__body = body
        return self

    def phone_number(self, phone_number: str) -> 'RequestBuilder':
        self.__phone_number = phone_number
        return self

    def email(self, email: str) -> 'RequestBuilder':
        self.__email = email
        return self

    def build(self) -> RequestDto:
        try:
            return RequestDto(self.__topic, self.__body, self.__phone_number, self.__email)
        except WithoutContactsException:
            raise WithoutContactsException()
