<?
namespace Root\App;

class PromotionSample
{
  public function __construct(private int $value)
  {
  }

  public function getValue(): int
  {
    return $this->value;
  }
}
