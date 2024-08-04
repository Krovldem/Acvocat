from ru.iamlukovkin.email.service import (MailService, HtmlContentService)
from ru.iamlukovkin.email.models import (RequestDto, EmailTopics)


class RequestController:
    __mail_service: MailService
    __admin_mail: str

    def __init__(self, mail_service: MailService, admin_mail: str) -> None:
        self.__mail_service = mail_service
        self.__admin_mail = admin_mail

    def send_email(self, request_dto: RequestDto) -> bool:
        html_content_service: HtmlContentService = HtmlContentService(request_dto)
        self.__mail_service.html_document = html_content_service.build_admin_message()
        self.__mail_service.send_email(self.__admin_mail, EmailTopics.admin_topic)
        self.__mail_service.html_document = html_content_service.build_user_message()
        self.__mail_service.send_email(request_dto.email, EmailTopics.user_topic)
        return True
