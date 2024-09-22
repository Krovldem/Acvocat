class RequestDto:
    __topic: str
    __body: str
    __phone_number: str = None
    __email: str = None

    def __init__(self, topic: str, body: str, phone_number: str = None, email: str = None) -> None:
        """
        Request record for saving information
        throws WithoutContactsException
        """
        self.__topic = topic
        self.__body = body
        self.__phone_number = phone_number
        self.__email = email

    @property
    def topic(self) -> str: return self.__topic

    @property
    def body(self) -> str: return self.__body

    @property
    def phone_number(self) -> str: return self.__phone_number

    @property
    def email(self) -> str: return self.__email
