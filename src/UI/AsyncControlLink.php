<?php declare(strict_types=1);

namespace Sellastica\AsyncControl\UI;

final class AsyncControlLink
{
	/** @var string */
	private static $defaultMessage = 'Load content';
	/** @var array */
	private static $defaultAttributes = [];
	/** @var string */
	private $message;
	/** @var array */
	private $attributes;

	
	/**
	 * AsyncControlLink constructor.
	 * @param string|null $message
	 * @param array|null $attributes
	 */
	public function __construct(
		string $message = null,
		array $attributes = null
	)
	{
		$this->message = $message === null ? self::$defaultMessage : $message;
		$this->attributes = $attributes === null ? self::$defaultAttributes : $attributes;
	}

	/**
	 * @param string $message
	 * @param array $attributes
	 */
	public static function setDefault(string $message, array $attributes = [])
	{
		self::$defaultMessage = $message;
		self::$defaultAttributes = $attributes;
	}

	/**
	 * @return string
	 */
	public function getMessage(): string
	{
		return $this->message;
	}

	/**
	 * @return array
	 */
	public function getAttributes(): array
	{
		return $this->attributes;
	}
}
