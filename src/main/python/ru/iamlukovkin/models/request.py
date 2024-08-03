from .user import User
from datetime import datetime


class Request:
    __user: User
    __comment: str
    __date_of_publishing: datetime

    @property
    def user(self) -> User:
        return self.__user

    @user.setter
    def user(self, user: User) -> None:
        if user is None:
            return
        self.__user = user

    @property
    def comment(self) -> str:
        return self.__comment

    @comment.setter
    def comment(self, comment: str) -> None:
        if len(comment) == 0:
            return
        self.__comment = comment

    @property
    def date_of_publishing(self) -> datetime:
        return self.__date_of_publishing

    @date_of_publishing.setter
    def date_of_publishing(self, date_of_publishing: datetime) -> None:
        if date_of_publishing is None:
            return
        self.__date_of_publishing = date_of_publishing

    def __init__(self, user: User, comment: str) -> None:
        self.user = user
        self.comment = comment
        self.__date_of_publishing = datetime.now()

    def __hash__(self) -> int:
        return object.__hash__(self.__user) + object.__hash__(self.__comment)

    def __eq__(self, other) -> bool:
        if not isinstance(other, Request):
            return False
        other: Request
        return self.__user.__eq__(other.__user) & self.__comment.__eq__(other.__comment)

    def __ne__(self, other) -> bool:
        return not self.__eq__(other)

    def __str__(self) -> str:
        return f"Request(user='{self.__user}', comment='{self.__comment}')"
