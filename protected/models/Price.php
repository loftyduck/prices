<?php

/**
 * This is the model class for table "price".
 *
 * The followings are the available columns in table 'price':
 * @property string $id
 * @property string $value
 * @property string $date
 * @property integer $zipcode
 * @property string $fk_product_id
 */
class Price extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'price';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, value, fk_product_id', 'required'),
			array('zipcode', 'numerical', 'integerOnly'=>true),
			array('id, fk_product_id', 'length', 'max'=>20),
			array('date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, value, date, zipcode, fk_product_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'product' => array(self::BELONGS_TO, 'Product','fk_product_id'),
			'store' => array(self::BELONGS_TO, 'Store', 'fk_store_id'),
			// units and discounts might be many_many
			'units' => array(self::HAS_MANY, 'Unit','id'),
			'discounts' => array(self::HAS_MANY, 'Discount','id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'value' => 'Value',
			'date' => 'Date',
			'zipcode' => 'Zipcode',
			'fk_product_id' => 'Fk Product',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('value',$this->value,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('zipcode',$this->zipcode);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Price the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
