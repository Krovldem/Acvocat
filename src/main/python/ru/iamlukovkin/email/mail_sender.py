import smtplib

from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText

from html_mail_builder import HtmlMailBuilder


class MailSender:
    __mail_from: str
    __cred: str
    __text_content: str | None = None
    __html_document: str | None = None

    def __init__(self, email_from: str, creds: str) -> None:
        self.__mail_from = email_from
        self.__cred = creds

    @property
    def content(self) -> str | None:
        return self.__text_content

    @content.setter
    def content(self, content: str) -> None:
        self.__text_content = content
        self.__html_document = None

    @property
    def html_document(self) -> str | None:
        return self.__html_document

    @html_document.setter
    def html_document(self, pattern: str) -> None:
        self.__html_document = pattern
        self.__text_content = None

    def send_email(self, email_receiver: str, subject: str) -> None:
        msg = self.__prepare_message(email_receiver, subject)
        if self.__html_document is not None:
            msg.attach(self.__get_html_content())
        elif self.__text_content is not None:
            msg.attach(self.__get_plain_text())
        else:
            return
        self.__send_message(msg)

    def __prepare_message(self, email_receiver, subject) -> MIMEMultipart:
        result = MIMEMultipart()
        result['From'] = self.__mail_from
        result['To'] = email_receiver
        result['Subject'] = subject
        return result

    def __get_html_content(self) -> MIMEText:
        return MIMEText(self.html_document, 'html', 'utf-8')

    def __get_plain_text(self) -> MIMEText:
        return MIMEText(self.__text_content, 'plain')

    def __send_message(self, msg: MIMEMultipart) -> None:
        server = smtplib.SMTP('smtp.gmail.com', 587)
        server.starttls()
        server.login(self.__mail_from, self.__cred)
        server.send_message(msg)
        server.quit()
