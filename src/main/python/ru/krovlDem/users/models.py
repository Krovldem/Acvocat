import re

from django.db import models
from ru.iamlukovkin.models import User as UserModel


class User(models.Model):

    _email: str = models.CharField(max_length=100, unique=True, db_column="email")

    @property
    def email(self) -> str: return self._email

    @email.setter
    def email(self, email: str) -> None:
        if not UserModel.email_is_valid(email):
            return
        self._email = email

    _full_name: str = models.CharField(max_length=100, db_column="full_name")

    @property
    def full_name(self) -> str:
        return self._full_name

    @full_name.setter
    def full_name(self, full_name: str) -> None:
        if not self.full_name_is_valid(full_name):
            return
        self._full_name = full_name

    def __init__(self, full_name: str, email: str):
        super().__init__()
        self.full_name = full_name
        self.email = email

    @classmethod
    def email_is_valid(cls, email: str) -> bool:
        return bool(re.search(r'[\w.-]+@[\w.-]+.\w+', email))

    @classmethod
    def full_name_is_valid(cls, full_name: str) -> bool:
        if len(full_name) < 2:
            return False
        return True
