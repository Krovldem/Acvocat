from django.test import TestCase
from ru.krovlDem.acvocat.acvocat.wsgi import *
from .models import User


class TestUserModel(TestCase):
    def setUp(self) -> None:
        get_wsgi_application()

    @classmethod
    def test_create(cls):
        # arrange
        full_name: str = "test_user"
        email: str = "test@email.com"
        # act
        user: User = User(full_name, email)
        # assert
        assert user.full_name == full_name
        assert user.email == email
