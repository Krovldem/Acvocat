from ru.iamlukovkin.models import User


class TestUser:
    @staticmethod
    def test_create():
        # arrange
        full_name: str = "test_name"
        email: str = "test@email.com"
        # act
        user: User = User(full_name, email)
        # assert
        assert user.email == email
        assert user.full_name == full_name
