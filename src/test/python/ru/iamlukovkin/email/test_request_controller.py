from ru.iamlukovkin.email.models import RequestDto
from ru.iamlukovkin.email.controller import RequestController, EnvKeysController
from ru.iamlukovkin.email.service import MailService
from ru.iamlukovkin.email.builder import RequestBuilder


class TestRequestController:
    keys_controller: EnvKeysController = EnvKeysController()

    @classmethod
    def test_main(cls) -> None:
        mail_service: MailService = MailService(
            cls.keys_controller.get_value("MAIL_SENDER_LOGIN"),
            cls.keys_controller.get_value("MAIL_SENDER_PASSWORD")
        )
        request_dto: RequestDto = RequestBuilder().body("Это тестовое основание письма") \
            .topic("Тестовое письмо").email("iamlukovkin@gmail.com").phone_number("89105602086").build()
        request_controller: RequestController = RequestController(mail_service, "iamlukovkin@gmail.com")
        request_controller.send_email(request_dto)
