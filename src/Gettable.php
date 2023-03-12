<?
namespace Root\App;

use ReflectionProperty;
use Exception;

#[Attribute]
class Get {}

trait Gettable {
  public function __call(string $name, array $arguments) {
    if (!property_exists(self::class, $name)) {
      throw new Exception("No propparty: ", $name);
    }

    $reflectionProperty = new ReflectionProperty(self::class, $name);
    $reflectionAttributes = $reflectionProperty->getAttributes(Get::class);
    if (empty($reflectionAttributes)) {
      throw new Exception("no getter: ", $name);
    }

    return $reflectionProperty->isStatic()
    ? $this::${$name}
    : $this->{$name};
  }
}
