import React from 'react';

export default function PrimaryButton({ type = 'submit', className = '', processing, children }) {
    return (
        <button
            type={type}
            className={
                `inline-flex items-center justify-center py-5 w-52 bg-green-700 border border-transparent rounded-md font-bold text-xs text-white tracking-widest active:bg-green-900 hover:bg-green-600 transition ease-in-out duration-150 ${
                    processing && 'opacity-25'
                } ` + className
            }
            disabled={processing}
        >
            {children}
        </button>
    );
}
