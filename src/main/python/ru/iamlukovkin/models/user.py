import re


class User:
    __full_name: str

    @property
    def full_name(self) -> str:
        return self.__full_name

    @full_name.setter
    def full_name(self, full_name: str) -> None:
        if len(full_name) < 2:
            return
        self.__full_name = full_name

    __email: str

    @property
    def email(self) -> str:
        return self.__email

    @email.setter
    def email(self, email: str) -> None:
        if not self.email_is_valid(email):
            return
        self.__email = email

    def __init__(self, full_name: str, email: str):
        self.full_name = full_name
        self.email = email

    @classmethod
    def email_is_valid(cls, email: str) -> bool:
        return bool(re.search(r'[\w.-]+@[\w.-]+.\w+', email))

    def __eq__(self, other) -> bool:
        if not isinstance(other, User):
            return False
        other: User
        return self.__email.__eq__(other.__email) & self.__full_name.__eq__(other.__full_name)
