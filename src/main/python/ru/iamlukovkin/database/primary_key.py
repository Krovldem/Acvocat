class PrimaryKey:
    __value: object

    def __init__(self, value: object) -> None:
        self.__value = value

    @property
    def value(self) -> object:
        return self.__value

    @value.setter
    def value(self, value: object) -> None:
        if not self.__value.__class__ == value.__class__:
            return
        self.__value = value

    def __eq__(self, other: object) -> bool:
        if isinstance(other, self.__value.__class__):
            return False
        other: PrimaryKey
        return self.__value.__eq__(other.__value)

    def __ne__(self, other: object) -> bool:
        return not self.__eq__(other)
