<?php

return [
    'quote_order'    =>  [
        'staff'     =>  \App\Service\StaffService::class,
        'customer'  =>  \App\Service\CustomerService::class,
        'product'   =>  \App\Service\ProductService::class,
        'models'    =>  [
            'staff'     =>  \App\Models\Staff::class,
            'product'   =>  \App\Models\Product::class,
            'department'=>  \App\Models\Department::class,
        ],
        'model' =>  Cpkm\Lease\Models\LeaseQuoteOrder::class,
        'service'   => Cpkm\Lease\Services\Lease\QuoteOrderService::class,
        'form'  =>  [
            'name'  =>  'quote_order',
            'action'=>  '',
            'back'  =>  '',
            'method'=>  "POST",
            'form'  =>  [
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-xl-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'date',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-xl-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'no',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-xl-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'companies_id',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-xl-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'customers_id',
                                ]
                            ]
                        ],
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-xl-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'customer_contacts_id',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-xl-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'customer_phone',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-xl-6',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'lease_methods_id',
                                ]
                            ]
                        ],
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-xl-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'lease_start_date',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-xl-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'lease_end_date',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-xl-6',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'lease_address',
                                ]
                            ]
                        ],
                        
                        
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-xl-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'currencies_id',
                                ]
                            ]
                        ],
                        // [
                        //     'class' =>  'col-xl-3',
                        //     'col'   =>  [
                        //         [
                        //             'class' =>  'fields',
                        //             'field' =>  'exchange',
                        //         ]
                        //     ]
                        // ],
                        [
                            'class' =>  'col-xl-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'staff_id',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-xl-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'make_id',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-xl-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'invoice_types_id',
                                ]
                            ]
                        ],
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-xl-4',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'amount',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-xl-4',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'tax',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-xl-4',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'total_amount',
                                ]
                            ]
                        ],
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-xl-4',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'main_amount',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-xl-4',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'main_tax',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-xl-4',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'main_total_amount',
                                ]
                            ]
                        ],
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-xl-6',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'project_managements_id',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-xl-6',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'file',
                                ]
                            ]
                        ],
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-xl-12',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'remark',
                                ]
                            ]
                        ],
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-xl-12',
                            'col'   =>  [
                                [
                                    'class' =>  'slots',
                                    'field' =>  'options',
                                ]
                            ]
                        ],
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-12',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'items',
                                ]
                            ]
                        ],
                    ]
                ],
            ],
            'fields'    =>  [
                //日期
                'date'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'date',
                    'name'          =>  'date',
                    'text'          =>  'lease::backend.lease_quote_orders.date',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.date',
                    'required'      =>  true,
                    'rules' =>  [
                        
                    ]
                ],
                //單號
                'no'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'no',
                    'text'          =>  'lease::backend.lease_quote_orders.no',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.no',
                    'required'      =>  false,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ]
                ],
                //公司別
                'companies_id'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'companies_id',
                    'text'          =>  'lease::backend.lease_quote_orders.companies_id',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.companies_id',
                    'required'      =>  true,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ],
                    'source'    =>  \App\Service\CompanyService::class,
                ],
                //專案資料
                'project_managements_id'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'project_managements_id',
                    'text'          =>  'lease::backend.lease_quote_orders.project_managements_id',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.project_managements_id',
                    'required'      =>  true,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ],
                    'source'    =>  \App\Service\ProjectManagementService::class,
                ],
                //租賃客戶
                'customers_id'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'customers_id',
                    'text'          =>  'lease::backend.lease_quote_orders.customers_id',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.customers_id',
                    'required'      =>  true,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ],
                ],
                //租賃客戶聯絡人
                'customer_contacts_id'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'customer_contacts_id',
                    'text'          =>  'lease::backend.lease_quote_orders.customer_contacts_id',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.customer_contacts_id',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ],
                ],
                //租任客戶電話
                'customer_phone'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'customer_phone',
                    'text'          =>  'lease::backend.lease_quote_orders.customer_phone',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.customer_phone',
                    'required'      =>  false,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ]
                ],
                //租任方式
                'lease_methods_id'   =>  [
                    'tag'           =>  'radio',
                    'name'          =>  'lease_methods_id',
                    'direction'     =>  'horizontal',
                    'text'          =>  'lease::backend.lease_quote_orders.lease_methods_id',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.lease_methods_id',
                    'required'      =>  true,
                    'rules' =>  [
                        
                    ],
                    'options'   =>  [
                        
                    ]
                ],
                //租任開始日期
                'lease_start_date'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'date',
                    'name'          =>  'lease_start_date',
                    'text'          =>  'lease::backend.lease_quote_orders.lease_start_date',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.lease_start_date',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ]
                ],
                //租賃結束日期
                'lease_end_date'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'date',
                    'name'          =>  'lease_end_date',
                    'text'          =>  'lease::backend.lease_quote_orders.lease_end_date',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.lease_end_date',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ]
                ],
                //租任地址
                'lease_address'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'lease_address',
                    'text'          =>  'lease::backend.lease_quote_orders.lease_address',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.lease_address',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ]
                ],
                //幣別
                'currencies_id'   =>  [
                    'tag'           =>  'currency-select',
                    'name'          =>  'currencies_id',
                    'text'          =>  'lease::backend.lease_quote_orders.currencies_id',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.currencies_id',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ],
                    'source'    =>  \App\Service\CurrencyService::class,
                ],
                //匯率
                'exchange'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'exchange',
                    'text'          =>  'lease::backend.lease_quote_orders.exchange',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.exchange',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //人員
                'staff_id'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'staff_id',
                    'text'          =>  'lease::backend.lease_quote_orders.staff_id',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.staff_id',
                    'required'      =>  true,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ],
                    'source'    =>  \App\Service\StaffService::class,
                ],
                //製單人員
                'make_id'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'make_id',
                    'text'          =>  'lease::backend.lease_quote_orders.make_id',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.make_id',
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ],
                    'source'    =>  \App\Service\StaffService::class,
                ],
                //稅別
                'invoice_types_id'   =>  [
                    'tag'           =>  'radio',
                    'name'          =>  'invoice_types_id',
                    'direction'     =>  'horizontal',
                    'text'          =>  'lease::backend.lease_quote_orders.invoice_types_id',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.invoice_types_id',
                    'required'      =>  true,
                    'rules' =>  [
                        
                    ],
                    'options'   =>  [
                        
                    ]
                ],
                //未稅金額
                'amount'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'amount',
                    'text'          =>  'lease::backend.lease_quote_orders.amount',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.amount',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //稅金
                'tax'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'tax',
                    'text'          =>  'lease::backend.lease_quote_orders.tax',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.tax',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //總額
                'total_amount'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'total_amount',
                    'text'          =>  'lease::backend.lease_quote_orders.total_amount',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.total_amount',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //未稅金額(本未必)
                'main_amount'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'main_amount',
                    'text'          =>  'lease::backend.lease_quote_orders.main_amount',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.main_amount',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //稅金(本位幣)
                'main_tax'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'main_tax',
                    'text'          =>  'lease::backend.lease_quote_orders.main_tax',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.main_tax',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //總額(本位幣)
                'main_total_amount'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'main_total_amount',
                    'text'          =>  'lease::backend.lease_quote_orders.main_total_amount',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.main_total_amount',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //狀態
                'pre_purchase_order_statuses_id'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'pre_purchase_order_statuses_id',
                    'text'          =>  'lease::backend.lease_quote_orders.pre_purchase_order_statuses_id',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.pre_purchase_order_statuses_id',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ]
                ],
                
                //備註
                'remark'   =>  [
                    'tag'           =>  'textarea',
                    'name'          =>  'remark',
                    'text'          =>  'lease::backend.lease_quote_orders.remark',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.remark',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ]
                ],
                //附加檔案
                'file'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'file',
                    'name'          =>  'file',
                    'text'          =>  'lease::backend.lease_quote_orders.file',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.file',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ]
                ],
                //產品編號
                'items[][products_id]'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'items[$i][products_id]',
                    'text'          =>  'lease::backend.lease_quote_orders.lease_quote_order_items.*.products_id',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.lease_quote_order_items.*.products_id',
                    'required'      =>  true,
                    'options'       =>  [
                    ],
                    'rules' =>  [
                        
                    ],
                    'source'    =>  \App\Service\ProductService::class,
                    'templateResult' =>  'productTemplateResult',
                    'templateSelection' =>  'productTemplateSelection',
                    'class' =>  'product-item',
                ],
                //品名
                'items[][name]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'items[$i][name]',
                    'text'          =>  'lease::backend.lease_quote_orders.lease_quote_order_items.*.name',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.lease_quote_order_items.*.name',
                    'required'      =>  false,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //規格
                'items[][standard]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'items[$i][standard]',
                    'text'          =>  'lease::backend.lease_quote_orders.lease_quote_order_items.*.standard',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.lease_quote_order_items.*.standard',
                    'required'      =>  false,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //尺寸
                'items[][size]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'items[$i][size]',
                    'text'          =>  'lease::backend.lease_quote_orders.lease_quote_order_items.*.size',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.lease_quote_order_items.*.size',
                    'required'      =>  false,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //數量
                'items[][count]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'items[$i][count]',
                    'text'          =>  'lease::backend.lease_quote_orders.lease_quote_order_items.*.count',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.lease_quote_order_items.*.count',
                    'value'         =>  0,
                    'required'      =>  true,
                    'int'           =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //單位
                'items[][unit]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'items[$i][unit]',
                    'text'          =>  'lease::backend.lease_quote_orders.lease_quote_order_items.*.unit',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.lease_quote_order_items.*.unit',
                    'required'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //價格
                'items[][unit_amount]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'items[$i][unit_amount]',
                    'text'          =>  'lease::backend.lease_quote_orders.lease_quote_order_items.*.unit_amount',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.lease_quote_order_items.*.unit_amount',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  false,
                    'rules' =>  [
                        
                    ],
                ],
                'items[][depots_id]'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'items[$i][depots_id]',
                    'text'          =>  'lease::backend.lease_quote_orders.lease_quote_order_items.*.depots_id',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.lease_quote_order_items.*.depots_id',
                    'required'      =>  true,
                    'options'       =>  [
                    ],
                    'rules' =>  [
                        
                    ],
                    'source'    =>  \App\Service\DepotService::class,
                ],
                //未稅金額
                'items[][amount]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'items[$i][amount]',
                    'text'          =>  'lease::backend.lease_quote_orders.lease_quote_order_items.*.amount',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.lease_quote_order_items.*.amount',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //稅金
                'items[][tax]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'items[$i][tax]',
                    'text'          =>  'lease::backend.lease_quote_orders.lease_quote_order_items.*.tax',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.lease_quote_order_items.*.tax',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //總額
                'items[][total_amount]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'items[$i][total_amount]',
                    'text'          =>  'lease::backend.lease_quote_orders.lease_quote_order_items.*.total_amount',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.lease_quote_order_items.*.total_amount',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //未稅金額(本未必)
                'items[][main_amount]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'items[$i][main_amount]',
                    'text'          =>  'lease::backend.lease_quote_orders.lease_quote_order_items.*.main_amount',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.lease_quote_order_items.*.main_amount',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //稅金(本位幣)
                'items[][main_tax]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'items[$i][main_tax]',
                    'text'          =>  'lease::backend.lease_quote_orders.lease_quote_order_items.*.main_tax',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.lease_quote_order_items.*.main_tax',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //總額(本位幣)
                'items[][main_total_amount]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'items[$i][main_total_amount]',
                    'text'          =>  'lease::backend.lease_quote_orders.lease_quote_order_items.*.main_total_amount',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.lease_quote_order_items.*.main_total_amount',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //備註
                'items[][remark]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'items[$i][remark]',
                    'text'          =>  'lease::backend.lease_quote_orders.lease_quote_order_items.*.remark',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.lease_quote_order_items.*.remark',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ],
                ],
                //附加檔案
                'items[][file]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'file',
                    'name'          =>  'items[$i][file]',
                    'text'          =>  'lease::backend.lease_quote_orders.lease_quote_order_items.*.file',
                    'placeholder'   =>  'lease::backend.lease_quote_orders.lease_quote_order_items.*.file',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ],
                ],

                /*-------------------------表身---------------------- */
                'items' =>  [
                    'tag'           =>  'multiple_table',
                    'name'          =>  'items',
                    'text'          =>  'lease::backend.lease_quote_orders.items',
                    'key'           =>  'id',
                    'info'          =>  [],
                    'value'         =>  [],
                    'rules' =>  [
                        
                    ],
                    'parameters'    =>  [
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][products_id]',
                            'width' =>  '350px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][name]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][standard]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][size]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][count]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][unit]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][unit_amount]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][depots_id]',
                            'width' =>  '250px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][amount]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][tax]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][total_amount]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][main_amount]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][main_tax]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][main_total_amount]',
                            'width' =>  '200px',
                        ],
                        
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][remark]',
                            'width' =>  '300px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][file]',
                            'width' =>  '250px',
                        ],
                    ],
                    
                ],
            ],
        ]
    ],
    'contract_order'    =>  [
        'staff'     =>  \App\Service\StaffService::class,
        'customer'  =>  \App\Service\CustomerService::class,
        'product'   =>  \App\Service\ProductService::class,
        'models'    =>  [
            'staff'     =>  \App\Models\Staff::class,
            'product'   =>  \App\Models\Product::class,
            'department'=>  \App\Models\Department::class,
        ],
        'model' =>  Cpkm\Lease\Models\LeaseContractOrder::class,
        'service'   => Cpkm\Lease\Services\Lease\ContractOrderService::class,
        'form'  =>  [
            'name'  =>  'contract_order',
            'action'=>  '',
            'back'  =>  '',
            'method'=>  "POST",
            'form'  =>  [
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'date',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'no',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'sourceable_id',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'companies_id',
                                ]
                            ]
                        ],
                        
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'customers_id',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'customer_contacts_id',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'customer_phone',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'lease_methods_id',
                                ]
                            ]
                        ],
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'lease_start_date',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'lease_end_date',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-6',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'lease_address',
                                ]
                            ]
                        ],
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'currencies_id',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'staff_id',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'make_id',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'invoice_types_id',
                                ]
                            ]
                        ],
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-4',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'amount',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-4',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'tax',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-4',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'total_amount',
                                ]
                            ]
                        ],
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-4',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'main_amount',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-4',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'main_tax',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-4',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'main_total_amount',
                                ]
                            ]
                        ],
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-6',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'project_managements_id',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-6',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'file',
                                ]
                            ]
                        ],
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-12',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'remark',
                                ]
                            ]
                        ],
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-12',
                            'col'   =>  [
                                [
                                    'class' =>  'slots',
                                    'field' =>  'options',
                                ]
                            ]
                        ],
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-12',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'items',
                                ]
                            ]
                        ],
                    ]
                ],
            ],
            'fields'    =>  [
                //日期
                'date'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'date',
                    'name'          =>  'date',
                    'text'          =>  'lease::backend.lease_contract_orders.date',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.date',
                    'required'      =>  true,
                    'rules' =>  [
                        
                    ]
                ],
                //單號
                'no'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'no',
                    'text'          =>  'lease::backend.lease_contract_orders.no',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.no',
                    'required'      =>  false,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ]
                ],
                //來源單號
                'sourceable_id'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'sourceable_id',
                    'text'          =>  'lease::backend.lease_contract_orders.sourceable_id',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.sourceable_id',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ],
                    // 'source'    =>  \App\Service\CompanyService::class,
                ],
                //專案資料
                'project_managements_id'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'project_managements_id',
                    'text'          =>  'lease::backend.lease_contract_orders.project_managements_id',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.project_managements_id',
                    'required'      =>  true,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ],
                    'source'    =>  \App\Service\ProjectManagementService::class,
                ],
                //公司別
                'companies_id'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'companies_id',
                    'text'          =>  'lease::backend.lease_contract_orders.companies_id',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.companies_id',
                    'required'      =>  true,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ],
                    'source'    =>  \App\Service\CompanyService::class,
                ],
                //租賃客戶
                'customers_id'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'customers_id',
                    'text'          =>  'lease::backend.lease_contract_orders.customers_id',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.customers_id',
                    'required'      =>  true,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ],
                ],
                //租賃客戶聯絡人
                'customer_contacts_id'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'customer_contacts_id',
                    'text'          =>  'lease::backend.lease_contract_orders.customer_contacts_id',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.customer_contacts_id',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ],
                ],
                //租任客戶電話
                'customer_phone'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'customer_phone',
                    'text'          =>  'lease::backend.lease_contract_orders.customer_phone',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.customer_phone',
                    'required'      =>  false,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ]
                ],
                //租任方式
                'lease_methods_id'   =>  [
                    'tag'           =>  'radio',
                    'name'          =>  'lease_methods_id',
                    'direction'     =>  'horizontal',
                    'text'          =>  'lease::backend.lease_contract_orders.lease_methods_id',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.lease_methods_id',
                    'required'      =>  true,
                    'rules' =>  [
                        
                    ],
                    'options'   =>  [
                        
                    ]
                ],
                //租任期間
                'lease_date'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'lease_date',
                    'text'          =>  'lease::backend.lease_contract_orders.lease_date',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.lease_date',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ]
                ],
                //租任開始日期
                'lease_start_date'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'date',
                    'name'          =>  'lease_start_date',
                    'text'          =>  'lease::backend.lease_contract_orders.lease_start_date',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.lease_start_date',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ]
                ],
                //租賃結束日期
                'lease_end_date'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'date',
                    'name'          =>  'lease_end_date',
                    'text'          =>  'lease::backend.lease_contract_orders.lease_end_date',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.lease_end_date',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ]
                ],
                //租任地址
                'lease_address'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'lease_address',
                    'text'          =>  'lease::backend.lease_contract_orders.lease_address',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.lease_address',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ]
                ],
                //幣別
                'currencies_id'   =>  [
                    'tag'           =>  'currency-select',
                    'name'          =>  'currencies_id',
                    'text'          =>  'lease::backend.lease_contract_orders.currencies_id',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.currencies_id',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ],
                    'source'    =>  \App\Service\CurrencyService::class,
                ],
                //人員
                'staff_id'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'staff_id',
                    'text'          =>  'lease::backend.lease_contract_orders.staff_id',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.staff_id',
                    'required'      =>  true,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ],
                    'source'    =>  \App\Service\StaffService::class,
                ],
                //製單人員
                'make_id'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'make_id',
                    'text'          =>  'lease::backend.lease_contract_orders.make_id',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.make_id',
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ],
                    'source'    =>  \App\Service\StaffService::class,
                ],
                //稅別
                'invoice_types_id'   =>  [
                    'tag'           =>  'radio',
                    'name'          =>  'invoice_types_id',
                    'direction'     =>  'horizontal',
                    'text'          =>  'lease::backend.lease_contract_orders.invoice_types_id',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.invoice_types_id',
                    'required'      =>  true,
                    'rules' =>  [
                        
                    ],
                    'options'   =>  [
                        
                    ]
                ],
                //未稅金額
                'amount'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'amount',
                    'text'          =>  'lease::backend.lease_contract_orders.amount',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.amount',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //稅金
                'tax'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'tax',
                    'text'          =>  'lease::backend.lease_contract_orders.tax',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.tax',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //總額
                'total_amount'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'total_amount',
                    'text'          =>  'lease::backend.lease_contract_orders.total_amount',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.total_amount',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //未稅金額(本未必)
                'main_amount'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'main_amount',
                    'text'          =>  'lease::backend.lease_contract_orders.main_amount',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.main_amount',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //稅金(本位幣)
                'main_tax'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'main_tax',
                    'text'          =>  'lease::backend.lease_contract_orders.main_tax',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.main_tax',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //總額(本位幣)
                'main_total_amount'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'main_total_amount',
                    'text'          =>  'lease::backend.lease_contract_orders.main_total_amount',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.main_total_amount',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //狀態
                'pre_purchase_order_statuses_id'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'pre_purchase_order_statuses_id',
                    'text'          =>  'lease::backend.lease_contract_orders.pre_purchase_order_statuses_id',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.pre_purchase_order_statuses_id',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ]
                ],
                
                //備註
                'remark'   =>  [
                    'tag'           =>  'textarea',
                    'name'          =>  'remark',
                    'text'          =>  'lease::backend.lease_contract_orders.remark',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.remark',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ]
                ],
                //附加檔案
                'file'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'file',
                    'name'          =>  'file',
                    'text'          =>  'lease::backend.lease_contract_orders.file',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.file',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ]
                ],
                //產品編號
                'items[][products_id]'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'items[$i][products_id]',
                    'text'          =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.products_id',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.products_id',
                    'required'      =>  true,
                    'options'       =>  [
                    ],
                    'rules' =>  [
                        
                    ],
                    'source'    =>  \App\Service\ProductService::class,
                    'templateResult' =>  'productTemplateResult',
                    'templateSelection' =>  'productTemplateSelection',
                    'class' =>  'product-item',
                ],
                //品名
                'items[][name]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'items[$i][name]',
                    'text'          =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.name',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.name',
                    'required'      =>  false,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //規格
                'items[][standard]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'items[$i][standard]',
                    'text'          =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.standard',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.standard',
                    'required'      =>  false,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //尺寸
                'items[][size]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'items[$i][size]',
                    'text'          =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.size',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.size',
                    'required'      =>  false,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //數量
                'items[][count]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'items[$i][count]',
                    'text'          =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.count',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.count',
                    'value'         =>  0,
                    'required'      =>  true,
                    'int'           =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //單位
                'items[][unit]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'items[$i][unit]',
                    'text'          =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.unit',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.unit',
                    'required'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //價格
                'items[][unit_amount]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'items[$i][unit_amount]',
                    'text'          =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.unit_amount',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.unit_amount',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  false,
                    'rules' =>  [
                        
                    ],
                ],
                'items[][depots_id]'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'items[$i][depots_id]',
                    'text'          =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.depots_id',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.depots_id',
                    'required'      =>  true,
                    'options'       =>  [
                    ],
                    'rules' =>  [
                        
                    ],
                    'source'    =>  \App\Service\DepotService::class,
                ],
                //未稅金額
                'items[][amount]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'items[$i][amount]',
                    'text'          =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.amount',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.amount',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //稅金
                'items[][tax]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'items[$i][tax]',
                    'text'          =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.tax',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.tax',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //總額
                'items[][total_amount]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'items[$i][total_amount]',
                    'text'          =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.total_amount',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.total_amount',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //未稅金額(本未必)
                'items[][main_amount]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'items[$i][main_amount]',
                    'text'          =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.main_amount',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.main_amount',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //稅金(本位幣)
                'items[][main_tax]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'items[$i][main_tax]',
                    'text'          =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.main_tax',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.main_tax',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //總額(本位幣)
                'items[][main_total_amount]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'items[$i][main_total_amount]',
                    'text'          =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.main_total_amount',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.main_total_amount',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //備註
                'items[][remark]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'items[$i][remark]',
                    'text'          =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.remark',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.remark',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ],
                ],
                //附加檔案
                'items[][file]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'file',
                    'name'          =>  'items[$i][file]',
                    'text'          =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.file',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.file',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ],
                ],
                //出廠時數
                'items[][factory_hours]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'items[$i][factory_hours]',
                    'text'          =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.factory_hours',
                    'placeholder'   =>  'lease::backend.lease_contract_orders.lease_contract_order_items.*.factory_hours',
                    'required'      =>  false,
                    'float'         =>  1,
                    'rules' =>  [
                        
                    ],
                ],

                /*-------------------------表身---------------------- */
                'items' =>  [
                    'tag'           =>  'multiple_table',
                    'name'          =>  'items',
                    'text'          =>  'lease::backend.lease_contract_orders.items',
                    'key'           =>  'id',
                    'info'          =>  [],
                    'value'         =>  [],
                    'rules' =>  [
                        
                    ],
                    'parameters'    =>  [
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][products_id]',
                            'width' =>  '350px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][name]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][standard]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][size]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][count]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][unit]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][unit_amount]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][depots_id]',
                            'width' =>  '250px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][amount]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][tax]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][total_amount]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][main_amount]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][main_tax]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][main_total_amount]',
                            'width' =>  '200px',
                        ],
                        
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][remark]',
                            'width' =>  '300px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][file]',
                            'width' =>  '250px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][factory_hours]',
                            'width' =>  '250px',
                        ],
                    ],
                    
                ],
            ],
        ]
    ],
    'return_factory_order'    =>  [
        'staff'     =>  \App\Service\StaffService::class,
        'customer'  =>  \App\Service\CustomerService::class,
        'product'   =>  \App\Service\ProductService::class,
        'models'    =>  [
            'staff'     =>  \App\Models\Staff::class,
            'product'   =>  \App\Models\Product::class,
            'department'=>  \App\Models\Department::class,
        ],
        'model' =>  Cpkm\Lease\Models\LeaseReturnFactoryOrder::class,
        'service'   => Cpkm\Lease\Services\Lease\ReturnFactoryOrderService::class,
        'form'  =>  [
            'name'  =>  'return_factory_order',
            'action'=>  '',
            'back'  =>  '',
            'method'=>  "POST",
            'form'  =>  [
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'date',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'no',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'sourceable_id',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'companies_id',
                                ]
                            ]
                        ],
                        
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'customers_id',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'customer_contacts_id',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'customer_phone',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'lease_methods_id',
                                ]
                            ]
                        ],
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'lease_start_date',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'lease_end_date',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-6',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'lease_address',
                                ]
                            ]
                        ],
                        
                        
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'currencies_id',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'staff_id',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'make_id',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'invoice_types_id',
                                ]
                            ]
                        ],
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-4',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'amount',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-4',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'tax',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-4',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'total_amount',
                                ]
                            ]
                        ],
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-4',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'main_amount',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-4',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'main_tax',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-4',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'main_total_amount',
                                ]
                            ]
                        ],
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-6',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'file',
                                ]
                            ]
                        ],
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-12',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'remark',
                                ]
                            ]
                        ],
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-12',
                            'col'   =>  [
                                [
                                    'class' =>  'slots',
                                    'field' =>  'options',
                                ]
                            ]
                        ],
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-12',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'items',
                                ]
                            ]
                        ],
                    ]
                ],
            ],
            'fields'    =>  [
                //日期
                'date'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'date',
                    'name'          =>  'date',
                    'text'          =>  'lease::backend.lease_return_factory_orders.date',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.date',
                    'required'      =>  true,
                    'rules' =>  [
                        
                    ]
                ],
                //單號
                'no'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'no',
                    'text'          =>  'lease::backend.lease_return_factory_orders.no',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.no',
                    'required'      =>  false,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ]
                ],
                //來源單號
                'sourceable_id'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'sourceable_id',
                    'text'          =>  'lease::backend.lease_return_factory_orders.sourceable_id',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.sourceable_id',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ],
                    // 'source'    =>  \App\Service\CompanyService::class,
                ],
                //公司別
                'companies_id'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'companies_id',
                    'text'          =>  'lease::backend.lease_return_factory_orders.companies_id',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.companies_id',
                    'required'      =>  true,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ],
                    'source'    =>  \App\Service\CompanyService::class,
                ],
                //租賃客戶
                'customers_id'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'customers_id',
                    'text'          =>  'lease::backend.lease_return_factory_orders.customers_id',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.customers_id',
                    'required'      =>  true,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ],
                ],
                //租賃客戶聯絡人
                'customer_contacts_id'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'customer_contacts_id',
                    'text'          =>  'lease::backend.lease_return_factory_orders.customer_contacts_id',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.customer_contacts_id',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ],
                ],
                //租任客戶電話
                'customer_phone'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'customer_phone',
                    'text'          =>  'lease::backend.lease_return_factory_orders.customer_phone',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.customer_phone',
                    'required'      =>  false,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ]
                ],
                //租任方式
                'lease_methods_id'   =>  [
                    'tag'           =>  'radio',
                    'name'          =>  'lease_methods_id',
                    'direction'     =>  'horizontal',
                    'text'          =>  'lease::backend.lease_return_factory_orders.lease_methods_id',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.lease_methods_id',
                    'required'      =>  true,
                    'rules' =>  [
                        
                    ],
                    'options'   =>  [
                        
                    ]
                ],
                //租任開始日期
                'lease_start_date'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'date',
                    'name'          =>  'lease_start_date',
                    'text'          =>  'lease::backend.lease_return_factory_orders.lease_start_date',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.lease_start_date',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ]
                ],
                //租賃結束日期
                'lease_end_date'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'date',
                    'name'          =>  'lease_end_date',
                    'text'          =>  'lease::backend.lease_return_factory_orders.lease_end_date',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.lease_end_date',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ]
                ],
                //租任期間
                'lease_date'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'lease_date',
                    'text'          =>  'lease::backend.lease_return_factory_orders.lease_date',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.lease_date',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ]
                ],
                //租任地址
                'lease_address'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'lease_address',
                    'text'          =>  'lease::backend.lease_return_factory_orders.lease_address',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.lease_address',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ]
                ],
                //幣別
                'currencies_id'   =>  [
                    'tag'           =>  'currency-select',
                    'name'          =>  'currencies_id',
                    'text'          =>  'lease::backend.lease_return_factory_orders.currencies_id',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.currencies_id',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ],
                    'source'    =>  \App\Service\CurrencyService::class,
                ],
                //人員
                'staff_id'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'staff_id',
                    'text'          =>  'lease::backend.lease_return_factory_orders.staff_id',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.staff_id',
                    'required'      =>  true,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ],
                    'source'    =>  \App\Service\StaffService::class,
                ],
                //製單人員
                'make_id'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'make_id',
                    'text'          =>  'lease::backend.lease_return_factory_orders.make_id',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.make_id',
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ],
                    'source'    =>  \App\Service\StaffService::class,
                ],
                //稅別
                'invoice_types_id'   =>  [
                    'tag'           =>  'radio',
                    'name'          =>  'invoice_types_id',
                    'direction'     =>  'horizontal',
                    'text'          =>  'lease::backend.lease_return_factory_orders.invoice_types_id',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.invoice_types_id',
                    'required'      =>  true,
                    'rules' =>  [
                        
                    ],
                    'options'   =>  [
                        
                    ]
                ],
                //未稅金額
                'amount'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'amount',
                    'text'          =>  'lease::backend.lease_return_factory_orders.amount',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.amount',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //稅金
                'tax'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'tax',
                    'text'          =>  'lease::backend.lease_return_factory_orders.tax',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.tax',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //總額
                'total_amount'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'total_amount',
                    'text'          =>  'lease::backend.lease_return_factory_orders.total_amount',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.total_amount',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //未稅金額(本未必)
                'main_amount'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'main_amount',
                    'text'          =>  'lease::backend.lease_return_factory_orders.main_amount',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.main_amount',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //稅金(本位幣)
                'main_tax'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'main_tax',
                    'text'          =>  'lease::backend.lease_return_factory_orders.main_tax',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.main_tax',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //總額(本位幣)
                'main_total_amount'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'main_total_amount',
                    'text'          =>  'lease::backend.lease_return_factory_orders.main_total_amount',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.main_total_amount',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //狀態
                'pre_purchase_order_statuses_id'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'pre_purchase_order_statuses_id',
                    'text'          =>  'lease::backend.lease_return_factory_orders.pre_purchase_order_statuses_id',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.pre_purchase_order_statuses_id',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ]
                ],
                
                //備註
                'remark'   =>  [
                    'tag'           =>  'textarea',
                    'name'          =>  'remark',
                    'text'          =>  'lease::backend.lease_return_factory_orders.remark',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.remark',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ]
                ],
                //附加檔案
                'file'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'file',
                    'name'          =>  'file',
                    'text'          =>  'lease::backend.lease_return_factory_orders.file',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.file',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ]
                ],
                //產品編號
                'items[][products_id]'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'items[$i][products_id]',
                    'text'          =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.products_id',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.products_id',
                    'required'      =>  true,
                    'options'       =>  [
                    ],
                    'rules' =>  [
                        
                    ],
                    'source'    =>  \App\Service\ProductService::class,
                    'templateResult' =>  'productTemplateResult',
                    'templateSelection' =>  'productTemplateSelection',
                    'class' =>  'product-item',
                ],
                //品名
                'items[][name]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'items[$i][name]',
                    'text'          =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.name',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.name',
                    'required'      =>  false,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //規格
                'items[][standard]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'items[$i][standard]',
                    'text'          =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.standard',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.standard',
                    'required'      =>  false,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //尺寸
                'items[][size]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'items[$i][size]',
                    'text'          =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.size',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.size',
                    'required'      =>  false,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //數量
                'items[][count]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'items[$i][count]',
                    'text'          =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.count',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.count',
                    'value'         =>  0,
                    'required'      =>  true,
                    'int'           =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //單位
                'items[][unit]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'items[$i][unit]',
                    'text'          =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.unit',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.unit',
                    'required'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //價格
                'items[][unit_amount]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'items[$i][unit_amount]',
                    'text'          =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.unit_amount',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.unit_amount',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  false,
                    'rules' =>  [
                        
                    ],
                ],
                'items[][depots_id]'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'items[$i][depots_id]',
                    'text'          =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.depots_id',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.depots_id',
                    'required'      =>  true,
                    'options'       =>  [
                    ],
                    'rules' =>  [
                        
                    ],
                    'source'    =>  \App\Service\DepotService::class,
                ],
                //未稅金額
                'items[][amount]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'items[$i][amount]',
                    'text'          =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.amount',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.amount',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //稅金
                'items[][tax]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'items[$i][tax]',
                    'text'          =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.tax',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.tax',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //總額
                'items[][total_amount]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'items[$i][total_amount]',
                    'text'          =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.total_amount',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.total_amount',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //未稅金額(本未必)
                'items[][main_amount]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'items[$i][main_amount]',
                    'text'          =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.main_amount',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.main_amount',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //稅金(本位幣)
                'items[][main_tax]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'items[$i][main_tax]',
                    'text'          =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.main_tax',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.main_tax',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //總額(本位幣)
                'items[][main_total_amount]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'items[$i][main_total_amount]',
                    'text'          =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.main_total_amount',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.main_total_amount',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //備註
                'items[][remark]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'items[$i][remark]',
                    'text'          =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.remark',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.remark',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ],
                ],
                //附加檔案
                'items[][file]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'file',
                    'name'          =>  'items[$i][file]',
                    'text'          =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.file',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.file',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ],
                ],
                //出廠時數
                'items[][factory_hours]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'items[$i][factory_hours]',
                    'text'          =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.factory_hours',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.factory_hours',
                    'required'      =>  false,
                    'float'         =>  1,
                    'rules' =>  [
                        
                    ],
                ],
                //回廠時數
                'items[][return_factory_hours]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'items[$i][return_factory_hours]',
                    'text'          =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.return_factory_hours',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.return_factory_hours',
                    'required'      =>  false,
                    'float'         =>  1,
                    'rules' =>  [
                        
                    ],
                ],
                //使用時數
                'items[][use_hours]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'items[$i][use_hours]',
                    'text'          =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.use_hours',
                    'placeholder'   =>  'lease::backend.lease_return_factory_orders.lease_return_factory_order_items.*.use_hours',
                    'required'      =>  false,
                    'float'         =>  1,
                    'rules' =>  [
                        
                    ],
                ],

                /*-------------------------表身---------------------- */
                'items' =>  [
                    'tag'           =>  'multiple_table',
                    'name'          =>  'items',
                    'text'          =>  'lease::backend.lease_return_factory_orders.items',
                    'key'           =>  'id',
                    'info'          =>  [],
                    'value'         =>  [],
                    'rules' =>  [
                        
                    ],
                    'parameters'    =>  [
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][products_id]',
                            'width' =>  '250px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][name]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][standard]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][size]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][count]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][unit]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][unit_amount]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][depots_id]',
                            'width' =>  '250px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][amount]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][tax]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][total_amount]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][main_amount]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][main_tax]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][main_total_amount]',
                            'width' =>  '200px',
                        ],
                        
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][remark]',
                            'width' =>  '300px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][file]',
                            'width' =>  '250px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][factory_hours]',
                            'width' =>  '250px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][return_factory_hours]',
                            'width' =>  '250px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][use_hours]',
                            'width' =>  '250px',
                        ],
                    ],
                    
                ],
            ],
        ]
    ],
    'overhaul_order'    =>  [
        'staff'     =>  \App\Service\StaffService::class,
        'customer'  =>  \App\Service\CustomerService::class,
        'product'   =>  \App\Service\ProductService::class,
        'models'    =>  [
            'staff'     =>  \App\Models\Staff::class,
            'product'   =>  \App\Models\Product::class,
            'department'=>  \App\Models\Department::class,
        ],
        'model' =>  Cpkm\Lease\Models\LeaseOverhaulOrder::class,
        'service'   => Cpkm\Lease\Services\Lease\OverhaulOrderService::class,
        'form'  =>  [
            'name'  =>  'overhaul_order',
            'action'=>  '',
            'back'  =>  '',
            'method'=>  "POST",
            'form'  =>  [
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'date',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'no',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'sourceable_type',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'sourceable_id',
                                ]
                            ]
                        ],
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'companies_id',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'customers_id',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'customer_contacts_id',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'customer_phone',
                                ]
                            ]
                        ],
                        
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'lease_methods_id',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'lease_start_date',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'lease_end_date',
                                ]
                            ]
                        ],
                        
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'currencies_id',
                                ]
                            ]
                        ],
                        
                        
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-6',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'lease_address',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'staff_id',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-3',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'make_id',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-6',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'invoice_types_id',
                                ]
                            ]
                        ],
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-4',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'amount',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-4',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'tax',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-4',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'total_amount',
                                ]
                            ]
                        ],
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-4',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'main_amount',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-4',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'main_tax',
                                ]
                            ]
                        ],
                        [
                            'class' =>  'col-4',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'main_total_amount',
                                ]
                            ]
                        ],
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-6',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'file',
                                ]
                            ]
                        ],
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-12',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'remark',
                                ]
                            ]
                        ],
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-12',
                            'col'   =>  [
                                [
                                    'class' =>  'slots',
                                    'field' =>  'options',
                                ]
                            ]
                        ],
                    ]
                ],
                [
                    'class' =>  'row',
                    'col'   =>  [
                        [
                            'class' =>  'col-12',
                            'col'   =>  [
                                [
                                    'class' =>  'fields',
                                    'field' =>  'items',
                                ]
                            ]
                        ],
                    ]
                ],
            ],
            'fields'    =>  [
                //日期
                'date'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'date',
                    'name'          =>  'date',
                    'text'          =>  'lease::backend.lease_overhaul_orders.date',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.date',
                    'required'      =>  true,
                    'rules' =>  [
                        
                    ]
                ],
                //單號
                'no'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'no',
                    'text'          =>  'lease::backend.lease_overhaul_orders.no',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.no',
                    'required'      =>  false,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ]
                ],
                //來源類型
                'sourceable_type'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'sourceable_type',
                    'text'          =>  'lease::backend.lease_overhaul_orders.sourceable_type',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.sourceable_type',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                        [
                            'value' =>  \Cpkm\Lease\Models\LeaseContractOrder::class,
                            'name'  =>  '租賃合約單',
                        ],
                        [
                            'value' =>  \Cpkm\Lease\Models\LeaseReturnFactoryOrder::class,
                            'name'  =>  '回廠單',
                        ]
                    ],
                    // 'source'    =>  \App\Service\CompanyService::class,
                ],
                //來源單號
                'sourceable_id'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'sourceable_id',
                    'text'          =>  'lease::backend.lease_overhaul_orders.sourceable_id',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.sourceable_id',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ],
                    // 'source'    =>  \App\Service\CompanyService::class,
                ],
                //公司別
                'companies_id'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'companies_id',
                    'text'          =>  'lease::backend.lease_overhaul_orders.companies_id',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.companies_id',
                    'required'      =>  true,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ],
                    'source'    =>  \App\Service\CompanyService::class,
                ],
                //租賃客戶
                'customers_id'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'customers_id',
                    'text'          =>  'lease::backend.lease_overhaul_orders.customers_id',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.customers_id',
                    'required'      =>  true,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ],
                ],
                //租賃客戶聯絡人
                'customer_contacts_id'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'customer_contacts_id',
                    'text'          =>  'lease::backend.lease_overhaul_orders.customer_contacts_id',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.customer_contacts_id',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ],
                ],
                //租任客戶電話
                'customer_phone'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'customer_phone',
                    'text'          =>  'lease::backend.lease_overhaul_orders.customer_phone',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.customer_phone',
                    'required'      =>  false,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ]
                ],
                //租任方式
                'lease_methods_id'   =>  [
                    'tag'           =>  'radio',
                    'name'          =>  'lease_methods_id',
                    'direction'     =>  'horizontal',
                    'text'          =>  'lease::backend.lease_overhaul_orders.lease_methods_id',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.lease_methods_id',
                    'required'      =>  true,
                    'rules' =>  [
                        
                    ],
                    'options'   =>  [
                        
                    ]
                ],
                //租任期間
                'lease_date'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'lease_date',
                    'text'          =>  'lease::backend.lease_overhaul_orders.lease_date',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.lease_date',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ]
                ],
                //租任開始日期
                'lease_start_date'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'date',
                    'name'          =>  'lease_start_date',
                    'text'          =>  'lease::backend.lease_overhaul_orders.lease_start_date',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.lease_start_date',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ]
                ],
                //租賃結束日期
                'lease_end_date'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'date',
                    'name'          =>  'lease_end_date',
                    'text'          =>  'lease::backend.lease_overhaul_orders.lease_end_date',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.lease_end_date',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ]
                ],
                //租任地址
                'lease_address'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'lease_address',
                    'text'          =>  'lease::backend.lease_overhaul_orders.lease_address',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.lease_address',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ]
                ],
                //幣別
                'currencies_id'   =>  [
                    'tag'           =>  'currency-select',
                    'name'          =>  'currencies_id',
                    'text'          =>  'lease::backend.lease_overhaul_orders.currencies_id',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.currencies_id',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ],
                    'source'    =>  \App\Service\CurrencyService::class,
                ],
                //人員
                'staff_id'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'staff_id',
                    'text'          =>  'lease::backend.lease_overhaul_orders.staff_id',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.staff_id',
                    'required'      =>  true,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ],
                    'source'    =>  \App\Service\StaffService::class,
                ],
                //製單人員
                'make_id'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'make_id',
                    'text'          =>  'lease::backend.lease_overhaul_orders.make_id',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.make_id',
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ],
                    'source'    =>  \App\Service\StaffService::class,
                ],
                //稅別
                'invoice_types_id'   =>  [
                    'tag'           =>  'radio',
                    'name'          =>  'invoice_types_id',
                    'direction'     =>  'horizontal',
                    'text'          =>  'lease::backend.lease_overhaul_orders.invoice_types_id',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.invoice_types_id',
                    'required'      =>  true,
                    'rules' =>  [
                        
                    ],
                    'options'   =>  [
                        
                    ]
                ],
                //未稅金額
                'amount'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'amount',
                    'text'          =>  'lease::backend.lease_overhaul_orders.amount',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.amount',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //稅金
                'tax'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'tax',
                    'text'          =>  'lease::backend.lease_overhaul_orders.tax',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.tax',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //總額
                'total_amount'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'total_amount',
                    'text'          =>  'lease::backend.lease_overhaul_orders.total_amount',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.total_amount',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //未稅金額(本未必)
                'main_amount'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'main_amount',
                    'text'          =>  'lease::backend.lease_overhaul_orders.main_amount',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.main_amount',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //稅金(本位幣)
                'main_tax'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'main_tax',
                    'text'          =>  'lease::backend.lease_overhaul_orders.main_tax',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.main_tax',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //總額(本位幣)
                'main_total_amount'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'main_total_amount',
                    'text'          =>  'lease::backend.lease_overhaul_orders.main_total_amount',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.main_total_amount',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //狀態
                'pre_purchase_order_statuses_id'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'pre_purchase_order_statuses_id',
                    'text'          =>  'lease::backend.lease_overhaul_orders.pre_purchase_order_statuses_id',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.pre_purchase_order_statuses_id',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ],
                    'options'       =>  [
                    ]
                ],
                
                //備註
                'remark'   =>  [
                    'tag'           =>  'textarea',
                    'name'          =>  'remark',
                    'text'          =>  'lease::backend.lease_overhaul_orders.remark',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.remark',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ]
                ],
                //附加檔案
                'file'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'file',
                    'name'          =>  'file',
                    'text'          =>  'lease::backend.lease_overhaul_orders.file',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.file',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ]
                ],
                //產品編號
                'items[][products_id]'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'items[$i][products_id]',
                    'text'          =>  'lease::backend.lease_overhaul_orders.lease_overhaul_order_items.*.products_id',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.lease_overhaul_order_items.*.products_id',
                    'required'      =>  true,
                    'options'       =>  [
                    ],
                    'rules' =>  [
                        
                    ],
                    'source'    =>  \App\Service\ProductService::class,
                    'templateResult' =>  'productTemplateResult',
                    'templateSelection' =>  'productTemplateSelection',
                    'class' =>  'product-item',
                ],
                //品名
                'items[][name]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'items[$i][name]',
                    'text'          =>  'lease::backend.lease_overhaul_orders.lease_overhaul_order_items.*.name',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.lease_overhaul_order_items.*.name',
                    'required'      =>  false,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //規格
                'items[][standard]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'items[$i][standard]',
                    'text'          =>  'lease::backend.lease_overhaul_orders.lease_overhaul_order_items.*.standard',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.lease_overhaul_order_items.*.standard',
                    'required'      =>  false,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //尺寸
                'items[][size]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'items[$i][size]',
                    'text'          =>  'lease::backend.lease_overhaul_orders.lease_overhaul_order_items.*.size',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.lease_overhaul_order_items.*.size',
                    'required'      =>  false,
                    'disabled'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //數量
                'items[][count]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'items[$i][count]',
                    'text'          =>  'lease::backend.lease_overhaul_orders.lease_overhaul_order_items.*.count',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.lease_overhaul_order_items.*.count',
                    'value'         =>  0,
                    'required'      =>  true,
                    'int'           =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //單位
                'items[][unit]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'items[$i][unit]',
                    'text'          =>  'lease::backend.lease_overhaul_orders.lease_overhaul_order_items.*.unit',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.lease_overhaul_order_items.*.unit',
                    'required'      =>  true,
                    'rules' =>  [
                        
                    ],
                ],
                //價格
                'items[][unit_amount]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'number',
                    'name'          =>  'items[$i][unit_amount]',
                    'text'          =>  'lease::backend.lease_overhaul_orders.lease_overhaul_order_items.*.unit_amount',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.lease_overhaul_order_items.*.unit_amount',
                    'value'         =>  0,
                    'required'      =>  true,
                    'disabled'      =>  false,
                    'rules' =>  [
                        
                    ],
                ],
                'items[][depots_id]'   =>  [
                    'tag'           =>  'select',
                    'name'          =>  'items[$i][depots_id]',
                    'text'          =>  'lease::backend.lease_overhaul_orders.lease_overhaul_order_items.*.depots_id',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.lease_overhaul_order_items.*.depots_id',
                    'required'      =>  true,
                    'options'       =>  [
                    ],
                    'rules' =>  [
                        
                    ],
                    'source'    =>  \App\Service\DepotService::class,
                ],
                //檢修紀錄
                'items[][record]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'items[$i][record]',
                    'text'          =>  'lease::backend.lease_overhaul_orders.lease_overhaul_order_items.*.record',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.lease_overhaul_order_items.*.record',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ],
                ],
                //備註
                'items[][remark]'   =>  [
                    'tag'           =>  'input',
                    'type'          =>  'text',
                    'name'          =>  'items[$i][remark]',
                    'text'          =>  'lease::backend.lease_overhaul_orders.lease_overhaul_order_items.*.remark',
                    'placeholder'   =>  'lease::backend.lease_overhaul_orders.lease_overhaul_order_items.*.remark',
                    'required'      =>  false,
                    'rules' =>  [
                        
                    ],
                ],

                /*-------------------------表身---------------------- */
                'items' =>  [
                    'tag'           =>  'multiple_table',
                    'name'          =>  'items',
                    'text'          =>  'lease::backend.lease_overhaul_orders.items',
                    'key'           =>  'id',
                    'info'          =>  [],
                    'value'         =>  [],
                    'rules' =>  [
                        
                    ],
                    'parameters'    =>  [
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][products_id]',
                            'width' =>  '250px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][name]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][standard]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][size]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][count]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][unit]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][unit_amount]',
                            'width' =>  '200px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][depots_id]',
                            'width' =>  '250px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][record]',
                            'width' =>  '300px',
                        ],
                        [
                            'class' =>  'fields',
                            'field' =>  'items[][remark]',
                            'width' =>  '300px',
                        ],
                    ],
                    
                ],
            ],
        ]
    ],
];
