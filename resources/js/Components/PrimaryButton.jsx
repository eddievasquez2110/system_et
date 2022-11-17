import React from 'react';

export default function PrimaryButton({ type = 'submit', className = '', processing, children }) {
    return (
        <button
            type={type}
            className={

                `inline-flex items-center px-10 py-2 bg-green-900 border border-transparent rounded-md font-bold text-xs text-white tracking-widest active:bg-green-700 hover:bg-green-600 transition ease-in-out duration-150 ${
                    processing && 'opacity-25'
                } ` + className
            }
            disabled={processing}
        >
            {children}
        </button>
    );
}
