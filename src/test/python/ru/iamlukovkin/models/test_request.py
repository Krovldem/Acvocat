from ru.iamlukovkin.models import User, Request


class TestRequest:

    @staticmethod
    def test_create():
        # arrange
        user: User = User("test_name", "test@email.com")
        comment: str = "I need a help!"
        # act
        request: Request = Request(user, comment)
        assert request.user == user
        assert request.comment == comment
